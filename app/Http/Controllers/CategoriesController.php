<?php

namespace App\Http\Controllers;


use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TCG\Voyager\Models\Category;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = \App\Category::all();

        return view('categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show($slug)
    {
        $category = \App\Category::where('slug', $slug)->first();

        if (!$category) {
            throw new NotFoundHttpException();
        }

        $previousId = \App\Category::where('id', '<', $category->id)->max('id');

        $previous = \App\Category::find($previousId);

        $nextId = \App\Category::where('id', '>', $category->id)->min('id');
        $next = \App\Category::find($nextId);

        $params = [
            'category'  => $category,
            'previous'  => $previousId ? url('categories/' . $previous->slug) : '',
            'next'      => $nextId ? url('categories/' . $next->slug) : '',
        ];

        return view('categories.show', $params);
    }

}