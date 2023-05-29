<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send email to the predefined address with the submitted data
        Mail::to('contact@example.com')->send(new \App\Mail\ContactFormMail($validatedData));

        // Redirect to a thank you page or any other desired action
        return redirect()->route('contact.thankyou');
    }
}
