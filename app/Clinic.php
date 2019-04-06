<?php
namespace App;


use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $table = 'clinics';

    public function humans()
    {
        return $this->hasMany(Human::class);
    }
}