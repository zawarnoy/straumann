<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Post;
use TCG\Voyager\Models\Category;

class MainController extends Controller
{

    public function index()
    {
        $sliderCategory     = Category::where('slug', '=', 'slider-posts')->first();
        $advantagesCategory = Category::where('slug', '=', 'advantages-posts')->first();
        $newsCategory       = Category::where('slug', '=', 'news-posts')->first();

        $params = [
            'sliderPosts'     => Post::where('category_id', '=', $sliderCategory->id)->orderBy('created_at')->get(),
            'advantagesPosts' => Advantage::limit(6)->get(),
            'newsPosts'       => Post::where('category_id', '=', $newsCategory->id)->orderBy('created_at')->get(),
        ];

        return view('main', $params);
    }
}