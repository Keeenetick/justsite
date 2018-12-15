<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use MetaTag;
class OfferController extends Controller
{
    public function index()
    {
        
        $products = Product::all();
        MetaTag::set('title', 'Услуги');
        MetaTag::set('description', 'Наши услуги');
        return view('offer', compact('products'));
    }
}
