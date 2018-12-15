<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use MetaTag;
use App\Offer;
class OfferController extends Controller
{
    public function index()
    {
        
        $products = Product::all();
        MetaTag::set('title', 'Услуги');
        MetaTag::set('description', 'Наши услуги');
        return view('offer', compact('products'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'offername'=>'required'
        ]);

        Offer::create($request->all());
        return back()->with('success', 'Ваше сообщение отправлено');
    }
}
