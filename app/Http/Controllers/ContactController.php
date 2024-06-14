<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormSubmission;
use App\Models\Contact;


class ContactController extends Controller
{
    

    public function storecontact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Contact::create($request->all());
        return redirect()->back()
                         ->with(['success' => 'Thank you for contacting us. We will get back to you shortly.']);
    }

}
