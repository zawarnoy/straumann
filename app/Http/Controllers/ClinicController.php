<?php

namespace App\Http\Controllers;

use App\City;
use App\Clinic;

class ClinicController extends Controller
{
    public function index()
    {
        $params = [
            'cities'  => City::all(),
            'clinics' => Clinic::all(),
        ];

        return view('clinics.clinics', $params);
    }

    public function show($id)
    {
        $clinic = Clinic::findOrFail($id);

        $previousId   = Clinic::where('id', '<', $clinic->id)->max('id');
        $previousName = $previousId ? Clinic::find($previousId)->name : '';

        $nextId   = Clinic::where('id', '>', $clinic->id)->min('id');
        $nextName = $nextId ? Clinic::find($nextId)->name : '';

        $params = [
            'clinic'       => $clinic,
            'previous'     => $previousId,
            'next'         => $nextId,
            'nextName'     => $nextName,
            'previousName' => $previousName,
        ];

        return view('clinics.clinic', $params);
    }

}