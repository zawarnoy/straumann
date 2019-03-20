<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Category;

class MainController extends Controller
{

    public function index()
    {
        $params = [
            'sliderCategory'       => Category::where('slug', '=', 'slider-posts')->first(),
            'advantagesCategory'   => Category::where('slug', '=', 'advantages-posts')->first(),
            'newsCategory'         => Category::where('slug', '=', 'news-posts')->first(),
        ];

        return view('main', $params);
    }

}