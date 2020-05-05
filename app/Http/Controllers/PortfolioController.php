<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Category;
use App\Tag;
use App\Photo;
use Session;
use Purifier;
use Image;

use ImageUpload;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Create a variable and store all the blog posts in it from the database
        //$portfolioEntries = Portfolio::all();
        $portfolioEntries = Portfolio::orderBy('id','desc')->paginate(10);

        //$album = Portfolio::with('Photo')->get();

        //return a view and in the above variable
        return view('portfolio.index')->withPortfolioEntries($portfolioEntries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //selecting from the database
        $categories = Category::all();
        $tags = Tag::all();
        $photo = Photo::all();

        return view('portfolio.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);
        // Validate data
        $this->validate($request, array(
            'title'         => 'required',
            'slug'          => 'required|alpha_dash|min:5|max:255|unique:portfolio_entries,slug',
            'category_id'   => 'required',
            'video_link'    => 'max:255',
            'description'   => 'required',
            'filenames' => 'required',
            'filenames.*' => 'mimes:png,jpg,jpeg,pdf'
        ));

        // Store in the database
        $portfolio = new Portfolio();
        
        $portfolio->title = $request->title;
        $portfolio->slug = $request->slug;
        $portfolio->video_link = $request->video_link;
        $portfolio->category_id = $request->category_id;
        $portfolio->plugins = $request->plugins;
        $portfolio->runtime = $request->runtime;
        $portfolio->software = $request->software;
        //$portfolio->description = $request->description;
        $portfolio->description = Purifier::clean($request->description);

        // ---- Image cover upload Section

        // Create filename
        //$filename = $request->file('cover_image')->getClientOriginalName();

        // Upload image
        //$path = $request->file('cover_image')->storePubliclyAs('public/cover_images/' . $filename);

        // Save image
        if ($request->hasFile('cover_image'))
        {
            $cover_image = $request->file('cover_image');
            $filename = $cover_image->getClientOriginalName();
            //$extension = $cover_image->getClientOriginalExtension();
            $location = public_path('cover_images/' . $filename);
            //Image::make($cover_image)->resize(800, 400)->save($location);
            Image::make($cover_image)->save($location);

            $cover_image_upload = $filename;

            $portfolio->cover_image = $cover_image_upload;
        }          

        $portfolio->save();

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/album_images/', $name);  
                $data[] = $name;  
            }

            $file = new Photo();
            $file->portfolio_id = $portfolio->id;
            $file->description = $portfolio->description;
            $file->filenames=json_encode($data);
            $file->save();
        }

        $portfolio->tags()->sync($request->tags, false);        

        $request->session()->flash('success','Entry Succussful!');

        // Redirect to another page
        return redirect()->route('portfolio.show', $portfolio->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::find($id);
       //$album = DB::table('photos')->where('portfolio_entries_id', $portfolio->id )->get();

        return view('portfolio.show')->withPortfolio($portfolio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //Find the entry in the database and save as a var
        $portfolio = Portfolio::find($id);

        //selecting from the database for categories
        $categories = Category::all();

        $tags = Tag::all();

        $photos = Photo::all();

        //Retrun view and pass in the var that it'll previously created
        return view('portfolio.edit')->withPortfolio($portfolio)->withCategories($categories)->withTags($tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);

        //Validate the data
        if ($request->input('slug') == $portfolio->slug) {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'category_id' => 'required',
                'video_link'  => 'max:255',
                'description' => 'required'
            ));
        } else {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'slug' =>'required|alpha_dash|min:5|max:255|unique:portfolio_entries,slug',
                'category_id' => 'required',
                'video_link'  => 'max:255',
                'description' => 'required'
            ));
        }

        //Save the data to the database
        $portfolio = Portfolio::find($id);

        $portfolio->title = $request->input('title');
        $portfolio->slug = $request->input('slug');
        $portfolio->video_link = $request->input('video_link');
        $portfolio->category_id = $request->input('category_id');
        $portfolio->plugins = $request->input('plugins');
        $portfolio->runtime = $request->input('runtime');
        $portfolio->software = $request->input('software');    
        //$portfolio->description = $request->input('description');
        $portfolio->description = Purifier::clean($request->input('description'));        

        if ($request->hasFile('cover_image'))
        {
            //Add the new image
            
            $cover_image = $request->file('cover_image');
            $filename = $cover_image->getClientOriginalName();
            $location = public_path('cover_images/' . $filename);
            Image::make($cover_image)->save($location);
            //$oldFilename = $portfolio->cover_image;
            $oldFilename = "'cover_images/' . $filename";  // Value is not URL but directory file path
            if (file_exists($oldFilename)) {
                @unlink($oldFilename);         
            }       

            // Update new
            $portfolio->cover_image = $filename;

            // Delete old Photo
            //Storage::delete('images/' . $oldFilename);
        }       

        $portfolio->save();

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/album_images/', $name);  
                $data[] = $name;  
            }

            $file = new Photo();
            $file->portfolio_id = $portfolio->id;
            $file->description = $portfolio->description;           

            // images from db
            $tempArray = json_decode($file->filenames, true);
            // add new images to array
            array_push($tempArray, $your_data);

            $file->filenames = json_encode($data);
            $file->save();
        }


        if (isset($request->tags))
        {
            $portfolio->tags()->sync($request->tags, true);
        } else {
            $portfolio->tags()->sync(array());
        }

        //Set flash data with success message
        $request->session()->flash('success','Entry Succussfully Updated!');

        //Redirect with flash data to portfolio.show
        return redirect()->route('portfolio.show', $portfolio->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy (Request $request, $id)
    {
        //Find entry to delete
        $portfolio = Portfolio::find($id);

        // Deleting tags
        $portfolio->tags()->detach();

        $filename = $portfolio->cover_image;
       
        $image_path = public_path().'/cover_images/'.$filename;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        //method
        $portfolio->delete();

        return redirect()->route('portfolio.index')
                        ->with('success','Product deleted successfully');                        
    }

    //------------ Slug section of controller --------------//

    /**
     * Adding slug to url
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function getSingle ($slug)
    // {
    //     //Fetch from the DB based on slug
    //     $portfolio = Portfolio::where('slug', '=', '$slug')->first();

    //     //Return the and pass in the portfolio object
    //     return view('portfolio.single')->withPortfolio($portfolio);
    // }
}
