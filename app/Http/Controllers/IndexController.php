<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Content;
use App\Models\Meta;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Value;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $services = Service::limit(8)->get();
        $portofolio = Post::latest()->limit(12)->get();
        $content = Content::all()->keyBy('key');
        $quotes = Testimonial::latest()->limit(3)->get();
        $meta = Meta::all()->keyBy('page');
        $values = Value::all();
        return view('index',compact(['banners','services','content','quotes','meta','portofolio','values']));
    }
}
