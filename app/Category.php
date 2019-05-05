<?php

namespace App;

class Category extends \TCG\Voyager\Models\Category
{
    public function documents()
    {
        return $this->hasMany('App\Document', 'category_id');
    }
}