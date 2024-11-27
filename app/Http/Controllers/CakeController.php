<?php

namespace App\Http\Controllers;

use App\Mail\CustomizeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CakeController extends Controller
{

    public function submitCustomization(Request $request)
    {
        // Validate form data
        $data = $request->validate([
            'cake_name' => 'required',
            'weight' => 'required|numeric',
            'egg_preference' => 'required',
            'layers' => 'required|numeric',
            'flavor' => 'nullable|string',
            'filling' => 'nullable|string',
            'topping' => 'nullable|string',
            'color' => 'nullable|string',
            'message' => 'nullable|string',
            'delivery_date' => 'required|date',
        ]);

        // Send email
        Mail::to('mashisavindya@gmail.com')->send(new CustomizeMail($data));
//        Mail::send('emails.customize-cake-mail', $validated, function ($message) use ($validated) {
//            $message->to('mashisavindya@gmail.com')
//                ->subject('Cake Customization Order for ' . $validated['cake_name']);
//        });

        return redirect()->back()->with('success', 'Your cake customization order has been submitted!');
    }
}
