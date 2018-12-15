<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferControllerBahmut extends Controller
{
    public function index()
    {
        return view('bahmut.offerbahmut');
    }
}
