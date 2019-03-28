<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\News;
use App\Post;
use App\SliderPost;
use App\TherapyOpportunitiesPost;
use TCG\Voyager\Models\Category;

class MainController extends Controller
{

    public function index()
    {
        $newsCategory       = Category::where('slug', '=', 'news-posts')->first();

        $params = [
            'sliderPosts'           => SliderPost::all(),
            'advantagesPosts'       => Advantage::limit(6)->get(),
            'severalNews'           => News::all(),
        ];

        return view('main', $params);
    }
}