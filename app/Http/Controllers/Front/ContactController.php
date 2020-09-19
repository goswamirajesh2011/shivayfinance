<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContactMail;
use App\Contact;

class ContactController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
    * Display the contact us page.
    *
    */
    public function contact(){
        return view('front.contact');
    }

    /**
    * store contact request information.
    *
    */
    public function sentcontact(Request $request){
        //dd($request->toArray());
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|unique:contacts',
            'phone' => 'required|unique:contacts'
        ]);

        $contactRequest = Contact::create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'state' => $request->state,
            'city' => $request->city,
            'message' => $request->message,
        ]);
        $contactRequest->save();

        $data = array(
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'state' => $request->state,
            'city' => $request->city,
            'message' => $request->message,
        );
        Mail::to('goswami.rajesh.2011@gmail.com')->send(new SendContactMail($data));
        return redirect()->route('front.contact')->with('success', 'Thank you for contacting us! One of our candidate will contact you soon');
    }
}
