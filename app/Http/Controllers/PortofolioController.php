<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Content;
use App\Models\Meta;
use TCG\Voyager\Models\Post;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = Post::latest()->get();
        $content = Content::all()->keyBy('key');
        $meta = Meta::all()->keyBy('page');
        return view('portofolio',compact(['portofolio','content','meta']));
    }

    public function show($slug)
    {
        $porto = Post::where('slug',$slug)->first();
        $portos = Post::where('slug','!=',$slug)->latest()->get();
        $contact = Contact::where('key','wa-utama')->first();
        return view('show.portofolio',compact(['porto','portos','contact']));
    }
}
