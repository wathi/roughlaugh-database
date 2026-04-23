<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ContactFormController extends Controller
{
  public function index()
  {
    return view('contactform');
  }
}
