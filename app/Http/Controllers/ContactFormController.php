<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;

class ContactFormController extends Controller
{
  public function index()
  {
    return view('contactform');
  }

  public function store(Request $request)
  {
    // Validate form data
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'message' => 'required|string|min:10|max:5000',
    ]);

    // Send email to admin
    Mail::to(config('mail.from.address'))
      ->send(new ContactFormMail(
        $validated['name'],
        $validated['email'],
        $validated['message']
      ));

    // Send confirmation email to user
    Mail::to($validated['email'])
      ->send(new ContactConfirmationMail(
        $validated['name'],
        $validated['message']
      ));

    return redirect()
      ->route('contactform')
      ->with('success', 'Thank you! Your message has been sent successfully.');
  }
}
