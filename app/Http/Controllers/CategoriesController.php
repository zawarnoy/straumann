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

        return view('category.show', [
            'category' => $category,
        ]);
    }

}