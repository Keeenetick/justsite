<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;
use Mail;

class ContactUSControllerBahmut extends Controller
{
    public function contactUSBahmut()
    {
        return view('bahmut.welcome');
    }

    public function ContactUSPost2(Request $request)
    {
        $this->validate ($request,[
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);
        ContactUS::create($request->all());
        Mail::send('email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('saquib.gt@gmail.com');
        $message->to('achtech7@gmail.com', 'Admin')->subject('Заявка');
    });
        return back()->with('success', 'Ваше сообщение отправлено');
    }
}
