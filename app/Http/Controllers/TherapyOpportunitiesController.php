<?php

namespace App\Http\Controllers;

use App\TherapyOpportunitiesPost;

class TherapyOpportunitiesController
{

    public function show($id)
    {
        $post = TherapyOpportunitiesPost::findOrFail($id);

        $params = [
            'post'      => $post,
            'previous'  => url('opportunities/' . TherapyOpportunitiesPost::where('id', '<', $post->id)->max('id')),
            'next'      => url('opportunities/' . TherapyOpportunitiesPost::where('id', '>', $post->id)->min('id')),
        ];

        return view('article', $params);
    }

}