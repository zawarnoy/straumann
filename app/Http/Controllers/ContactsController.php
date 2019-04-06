<?php

namespace App\Http\Controllers;

use App\Office;

class ContactsController extends Controller
{

    public function index()
    {
        $params = [
            'offices' => Office::all(),
        ];

        return view('contacts', $params);
    }

}