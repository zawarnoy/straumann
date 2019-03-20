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

        $params = [
            'clinic'    => $clinic,
            'previous'  => Clinic::where('id', '<', $clinic->id)->max('id'),
            'next'      => Clinic::where('id', '>', $clinic->id)->min('id'),
        ];

        return view('clinics.clinic', $params);
    }

}