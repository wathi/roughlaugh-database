<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PublicationController extends Controller
{
  public function index()
  {
    $currentPage = request()->query('page', 1);
    $response = Http::get($this->apiUrl . 'posts', [
      'categories' => 24,
      'per_page' => 10,
      'page' => $currentPage,
    ]);
    // dd($response->header('X-WP-TotalPages'));
    return view('publication.index', [
      'posts' => $response->json(),
      'currentPage' => $currentPage,
      'totalPages' => (int) $response->header('X-WP-TotalPages'),
    ]);
  }
}
