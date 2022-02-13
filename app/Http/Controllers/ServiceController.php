<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Meta;
use App\Models\Service;
use App\Models\Testimonial;

class ServiceController extends Controller
{
    public function index()
    {
        $contact = \App\Models\Contact::all()->keyBy('key');
        $services = Service::limit(8)->get();
        $content = Content::all()->keyBy('key');
        $quotes = Testimonial::latest()->limit(3)->get();
        $meta = Meta::all()->keyBy('page');
        return view('service',compact(['services','content','meta','quotes','contact']));
    }

    public function show($slug)
    {
        $meta = Meta::all()->keyBy('page');
        $contact = \App\Models\Contact::all()->keyBy('key');
        $service = Service::where('slug',$slug)->first();
        $services = Service::Where('slug','!=',$slug)->latest()->get();
        return view('show.service',compact(['service','services','contact','meta']));
    }
}
