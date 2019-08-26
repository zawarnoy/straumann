<?php

namespace App\Http\Controllers;

use App\Advantage;

class AdvantageController extends Controller
{
    public function show($id)
    {
        $post = Advantage::findOrFail($id);

        $previousId = Advantage::where('id', '<', $post->id)->max('id');
        $nextId     = Advantage::where('id', '>', $post->id)->min('id');

        return view('article', [
            'post'      => $post,
            'previous'  => $previousId ? url('advantages/' . $previousId) : null,
            'next'      => $nextId ? url('advantages/' . $nextId) : null,
        ]);
    }

    public function index()
    {
        $advantages = Advantage::all();

        return view('advantages.index', ['advantages' => $advantages]);
    }
}