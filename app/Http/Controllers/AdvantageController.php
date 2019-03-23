<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Post;

class AdvantageController extends Controller
{
    public function show($id)
    {
        $post = Advantage::findOrFail($id);

        $previousId = Post::where('id', '<', $post->id)->max('id');
        $nextId     = Post::where('id', '>', $post->id)->min('id');

        return view('article', [
            'post'      => $post,
            'previous'  => $previousId ? url('advantages/' . $previousId) : null,
            'next'      => $nextId ? url('advantages/' . $nextId) : null,
        ]);
    }
}