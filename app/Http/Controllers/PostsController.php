<?php


namespace App\Http\Controllers;


use App\Post;

class PostsController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $params = [
            'post' => $post,
        ];

        return view('article', $params);
    }
}