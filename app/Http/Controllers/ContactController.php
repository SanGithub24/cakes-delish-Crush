<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function submit(Request $request)
    {
        // Validate form data
        $data = $request->validate([
            'name' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'message' => 'nullable|string',
        ]);

        // Send email
        Mail::to('mashisavindya@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Your message has been submitted!');
    }
}
