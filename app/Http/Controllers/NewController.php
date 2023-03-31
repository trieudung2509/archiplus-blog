<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Blog; 

class NewController extends Controller
{
    // FE
    public function news_page() {
        $list_posts = Blog::select('id','title','slug', 'short_description', 'created_at')->take(6)->get();

        return view("frontend.news_page", compact('list_posts'));
    }

    public function detail_page($slug) {
        $post = Blog::where('slug', $slug)->first();

        return view("frontend.detail_page", compact('post'));
    }
}
