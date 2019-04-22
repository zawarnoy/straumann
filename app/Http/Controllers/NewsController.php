<?php

namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller
{
    public function show($id)
    {
        $post = News::findOrFail($id);

        $previousId = News::where('id', '<', $post->id)->max('id');
        $nextId     = News::where('id', '>', $post->id)->min('id');

        $params = [
            'post'      => $post,
            'previous'  => $previousId ? url('news/' . $previousId) : '',
            'next'      => $nextId ? url('news/' . $nextId) : '',
        ];

        return view('article', $params);
    }

    public function index()
    {
        $news = News::all();

        $params = [
            'severalNews' => $news,
        ];

        return view('news.index', $params);
    }
}