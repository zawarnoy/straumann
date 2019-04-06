<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function humans()
    {
        return $this->hasMany(Human::class);
    }
}
