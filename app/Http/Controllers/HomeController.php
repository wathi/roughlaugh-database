<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
  public function index()
  {
    $response = Http::get($this->apiUrl . 'pages', [
      'slug' => 'home',
    ]);
    // dd($response->json()[0]);
    return view('home', [
      'page' => $response->json()[0],
    ]);
  }
}
