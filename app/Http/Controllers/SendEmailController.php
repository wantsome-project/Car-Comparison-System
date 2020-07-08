<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Auth;

class SendEmailcontroller extends Controller
{
    function index()
    {
     return view('send_email');
    }
    function send(Request $request)
    {
     $this->validate($request, [
      'message' =>  'required'
     ]);

        $data = array(
            'name'      => Auth::user()->name,
            'message'   =>   $request->message
        );

     Mail::to('manau.vlad@yahoo.ro')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
