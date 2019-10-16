<?php

namespace App\Http\Controllers;

use App\City;
use App\Clinic;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function clinics(Request $request, $id)
    {
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

        if ($request->ajax()) {
            return view('clinics.parts.list_clinics', $params);
        }

        $params['cities'] = City::all();

        return view('clinics.clinics', $params);
    }
}