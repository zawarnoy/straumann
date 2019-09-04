<?php

namespace App\Http\Controllers;

use App\Event;

class EventsController
{
    public function index()
    {
        return view('events.index', ['events' => Event::all()]);
    }
}