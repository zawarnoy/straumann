<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    public static function getUniqueDates()
    {
        return DB::table('events')
            ->select('date')
            ->groupBy('date')
            ->get()
            ->pluck('date');
    }

    public static function getUniqueCountries()
    {
        return DB::table('events')
            ->select('country')
            ->groupBy('country')
            ->get()
            ->pluck('country');
    }

    public static function getUniqueTopics()
    {
        return DB::table('events')
            ->select('topic')
            ->groupBy('topic')
            ->get()
            ->pluck('topic');
    }
}