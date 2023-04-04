<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use App\Blog;

class HomeController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home_page()
    {
        $category_posts  = [];

        $list_categories = BlogCategory::Where(['status' => 1])->select('id', 'category_name', 'slug')->get();

        return view('frontend.home_page', compact('list_categories'));
    }
}
