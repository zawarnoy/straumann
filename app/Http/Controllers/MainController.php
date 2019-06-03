<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\News;
use App\SliderPost;

class MainController extends Controller
{

    private $cookieChoicedRole;

    public function __construct()
    {
        $this->cookieChoicedRole = request()->cookie('role');
    }

    public function index()
    {
        $sliderPosts = SliderPost::where('role', '=', $this->cookieChoicedRole);
        $advantagesPosts = Advantage::where('role', '=', $this->cookieChoicedRole);
        $severalNews = News::where('role', '=', $this->cookieChoicedRole);

        if ($this->cookieChoicedRole == 'patient') {
            $sliderPosts = $sliderPosts->orWhereNull('role');
            $advantagesPosts = $advantagesPosts->orWhereNull('role');
            $severalNews = $severalNews->orWhereNull('role');
        }

        $params = [
            'sliderPosts' => $sliderPosts->get(),
            'advantagesPosts' => $advantagesPosts->get(),
            'severalNews' => $severalNews->get(),
            'role' => $this->cookieChoicedRole,
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