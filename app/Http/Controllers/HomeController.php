<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.index',[
            'details'=>Blog::all()
        ]);
    }
    public function business(){
        return view('front-end.business.business');
    }
    public function culture(){
        return view('front-end.culture.culture');
    }

    public function politics(){
        return view('front-end.politics.politics');
    }
    public function blog(){
        return view('front-end.blog.blog',[
            'blogs'=>Blog::where('status',1)->get()
        ]);
    }

    public function blogDetails(){
        return view('front-end.blog.blog-details',[
            'details'=>Blog::all()
        ]);
    }
    public function blogDetail($id){
        return view('front-end.blog.blog-detail',[
            'detail'=>Blog::find($id)
        ]);
    }
    public function category(){
        return $this->belognsTo(Category::class);
    }

}
