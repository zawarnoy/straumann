<?php

namespace App\Http\Controllers;

use App\Event;

class EventsController
{
    public function index()
    {
        $params = [
            'events'           => Event::all(),
            'unique_dates'     => Event::getUniqueDates(),
            'unique_topics'    => Event::getUniqueTopics(),
            'unique_countries' => Event::getUniqueCountries(),
        ];

        return view('events.index', $params);
    }
}