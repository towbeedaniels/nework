<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact; 
use Mail; 

class ContactController extends Controller
{
    public function getContact() { 

       return view('pages.contact'); 
     } 

      public function saveContact(Request $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        Mail::send('pages.contactemail', array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'bodymessage' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('danielstowbee@gmail.com', 'Admin')->subject($request->get('subject'));
               });
        
        return back()->with('success', 'Thank you for contacting us!');

    }
}
