<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\News;
use App\SliderPost;

class MainController extends Controller
{

    public function index()
    {
        $params = [
            'sliderPosts'           => SliderPost::all(),
            'advantagesPosts'       => Advantage::all(),
            'severalNews'           => News::all(),
        ];

        return view('main', $params);
    }

    public function choiceRole()
    {
        return view('choice');
    }

    public function pricing()
    {
        return view('pricing');
    }
}