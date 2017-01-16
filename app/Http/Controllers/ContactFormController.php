<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Validator;

class ContactFormController extends Controller
{
    public function contactForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);

        Mail::send('emails.contact', $request->all(), function($message) {
            $message->to('jboud1217@gmail.com');
            $message->subject('Message from website!');
        });

        return back()->with('success', 'Email sent successfully!');
    }
}
