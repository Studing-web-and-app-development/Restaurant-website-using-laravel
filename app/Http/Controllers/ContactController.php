<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
       $this->validate($request,[
           'message'=>'required',
           'name'=>'required',
           'email'=>'required',
           'subject'=>'required',
       ]);

       $contact = new Contact();
       $contact->message = $request->message;
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->subject = $request->subject;
       $contact->save();

       
    }
}
