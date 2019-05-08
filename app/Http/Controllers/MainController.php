<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\News;
use App\SliderPost;

class MainController extends Controller
{

    public function index()
    {
        $role = request()->cookie('role');

        $sliderPosts = SliderPost::where('role', '=', $role);
        $advantagesPosts = Advantage::where('role', '=', $role);
        $severalNews = News::where('role', '=', $role);

        if ($role == 'patient') {
            $sliderPosts = $sliderPosts->orWhereNull('role');
            $advantagesPosts = $advantagesPosts->orWhereNull('role');
            $severalNews = $severalNews->orWhereNull('role');
        }

        $params = [
            'sliderPosts'           => $sliderPosts->get(),
            'advantagesPosts'       => $advantagesPosts->get(),
            'severalNews'           => $severalNews->get(),
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