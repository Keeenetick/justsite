<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MetaTag;
class OfferControllerBahmut extends Controller
{
    public function index()
    {
        MetaTag::set('title','Услуги');
        MetaTag::set('description','Наши услуги');
        return view('bahmut.offerbahmut');
    }
}
