<?php

namespace App\Http\Controllers;

use App\City;
use App\Clinic;
use http\Env\Url;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {
        $params = [
            'cities'  => City::all(),
            'clinics' => Clinic::all(),
            'name'    => 'Все города',
        ];

        return view('clinics.clinics', $params);
    }

    public function show(Request $request, $id)
    {

        $clinic = Clinic::findOrFail($id);

        $previousId = Clinic::where('id', '<', $clinic->id)->max('id');
        $previousName = $previousId ? Clinic::find($previousId)->name : '';

        $nextId = Clinic::where('id', '>', $clinic->id)->min('id');
        $nextName = $nextId ? Clinic::find($nextId)->name : '';

        $params = [
            'clinic'       => $clinic,
            'previous'     => $previousId,
            'next'         => $nextId,
            'nextName'     => $nextName,
            'previousName' => $previousName,
            'urlFrom'      => route('clinics.index'),
        ];

        if ($cityFromId = $this->getCityIdFromPrevUrl()) {
            $params['urlFrom'] = route('cities.show.clinics', ['id' => $cityFromId]);
            $params['nameCityFrom'] = City::find($cityFromId)->name;
        }

        return view('clinics.clinic', $params);
    }

    private function getCityIdFromPrevUrl(): ?int
    {
        if ((bool)preg_match('/\/cities\/(\d+)/', url()->previous(),$matches) !== false) {
            return $matches[1];
        }

        return null;
    }

}