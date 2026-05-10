<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
  public function index()
  {
    $response = Cache::remember('home_page', now()->addMinutes(10), function () {
      return Http::get($this->apiUrl . 'pages', [
        'slug' => 'home',
      ])->json()[0];
    });
    // dd($response);

    return response()->view('home', [
      'page' => $response,
    ])->header('X-Cache', Cache::has('home_page') ? 'HIT' : 'MISS');
  }
}
