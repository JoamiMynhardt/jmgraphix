<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Category;
use App\Tag;
use App\Mail\mailme;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function getIndex() 
    {
        return view('pages.home');
    }

    public function getResume ()
    {
        return view('pages.resume');
    }

    public function getPortfolioMain ()
    {
        

        //$tag->name = $request->name;
        //$tag->tag_filter = $request->tag_filter;

        $portfolioEntries = Portfolio::orderBy('created_at', 'desc')->get();

        //selecting from the database for categories
        $categories = Category::all();
        
        $tags = Tag::all();
        

        return view('pages.portfolio')->withPortfolioEntries($portfolioEntries)->withCategories($categories)->withTags($tags);
    }
    
    public function getSingle ($slug)
    {
        //$project = Portfolio::find($slug);
        $project = Portfolio::where('slug', '=', $slug)->first();
        //return $project;
        //$url = route('portfolio');
        //return view('pages.portfolio_single', ['project' => $project]);
        return view('pages.portfolio_single')->withPortfolio($project);
        
    }
    
    public function getContact ()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        //dd(request()->all());
        $this->validate($request, [
            'subject' => 'required|min:3',
            'name' => 'required|min:3',
            'phone' => 'numeric',
            'email' => 'required|email',
            'message' => 'min:10'
            ]);

            $data = array (
                'subject' => $request->subject,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'bodyMessage' => $request->message
            );

        Mail::send('emails.contact', $data, function($message) use ($data)
        {
            $message->from($data['email']);
            $message->to('joami@jmgraphix.co.za');
            $message->subject($data['subject']);
        });

        // $data = request()->validate([
        //     'subject' => 'required|min:3',
        //     'name' => 'required|min:3',
        //     'phone' => 'numeric',
        //     'email' => 'required|email',
        //     'message' => 'required|min:10', 
        // ]);
       
        // Mail::to('joami@jmgraphix.co.za')->send(new ContactFormMail($data));       

        Session::flash('success', 'Thank you for your email. I will be in contact with you shortly!');

        return redirect()->url('/');
    }
}
