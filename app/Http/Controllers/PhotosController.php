<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;
use\App\Portfolio;

use Session;

class PhotosController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Photo $portfolio_entires_id)
    {
        return view('photos.create')->withPortfolio($portfolio_entires_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo'))
        {
            $photo = $request->file('photo');
            $filename = $cover_image->getClientOriginalName();
            //$extension = $cover_image->getClientOriginalExtension();
            $location = public_path('album_images/' . $request->input('portfolio_entires_id'), $filename);
            //Image::make($cover_image)->resize(800, 400)->save($location);
            Image::make($photo)->save($location);

            $photo = $filename;

            $portfolio->cover_image = $photo;
        } 

        // if ($request->hasFile('gallery'))
        // {
        //    foreach ($request->file('gallery') as $image)
        //    {
        //         $name = $image->getClientOriginalName();
        //         //print_r($name);
        //         Image::make($image)->save( public_path('gallery_images/' . $name) );
        //         $gallery_image_upload = $name;
        //         $portfolio->gallery = $gallery_image_upload;              
        //    }
        // } 

        $portfolio->save();           

        $request->session()->flash('success','Entry Succussful!');

        // Redirect to another page
        return redirect()->route('photos.show', $portfolio->id);
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

        $album = Portfolio::with;
        return view('photos.show')->withPortfolio($portfolio->id)->withPortfolio($album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
