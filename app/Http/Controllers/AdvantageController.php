<?php

namespace App\Http\Controllers;

use App\Post;
use TCG\Voyager\Models\Category;

class AdvantageController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $category = Category::where('slug', '=', 'advantages-posts')->first();

        if ($post->category_id !== $category->id) {
            abort(404, 'Page not found');
        }

        return view('article', [
            'post' => $post,
        ]);
    }
}