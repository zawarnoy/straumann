<?php

namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller
{
    public function show($id)
    {
        $post = News::findOrFail($id);

        $params = [
            'post'      => $post,
            'previous'  => url('news/' . News::where('id', '<', $post->id)->max('id')),
            'next'      => url('news/' . News::where('id', '>', $post->id)->min('id')),
        ];

        return view('article', $params);
    }
}