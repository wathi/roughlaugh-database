<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
  public function index()
  {
    $response = Http::get($this->apiUrl . 'pages', [
      'slug' => 'contact',
    ]);
    // dd($response->json()[0]);

    return view('contact', [
      'page' => $response->json()[0],
    ]);
  }
}
