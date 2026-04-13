<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class LiveController extends Controller
{
  public function index()
  {
    $currentPage = request()->query('page', 1);
    $response = Http::get($this->apiUrl . 'posts', [
      'categories' => 25,
      'per_page' => 10,
      'page' => $currentPage,
    ]);
    // dd($response->header('X-WP-TotalPages'));
    return view('live.index', [
      'posts' => $response->json(),
      'currentPage' => $currentPage,
      'totalPages' => (int) $response->header('X-WP-TotalPages'),
    ]);
  }
}
