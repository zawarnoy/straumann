<?php

namespace App\Http\Controllers;

use App\City;
use App\Clinic;
use Illuminate\Http\Request;

class CityController
{
    public function clinics(Request $request)
    {
        $id     = $request->get('id');
        $city   = null;

        if ((int)$id === 0) {
            $clinics = Clinic::all();
        } else {
            $clinics = Clinic::where('city_id', '=', $id)->get();
            $city    = City::find($id);
        }

        $params = [
            'clinics'   => $clinics,
            'name'      => $city ? $city->name : 'Все города',
        ];

        return view('clinics.parts.list_clinics', $params);
    }
}