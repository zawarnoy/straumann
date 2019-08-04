<?php

namespace App\Http\Controllers;

class PricingController extends Controller
{
    public function index()
    {
        return view('pricing.index');
    }

    public function implants()
    {
        return view('pricing.implants');
    }

    public function prostheses()
    {
        return view('pricing.prostheses');
    }
}