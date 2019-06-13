<?php
namespace App;


use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Clinic extends Model
{
    use Resizable;

    protected $table = 'clinics';

    public function humans()
    {
        return $this->hasMany(Human::class);
    }
}