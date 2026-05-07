<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class FansController extends Controller
{
  public function index()
  {
    $currentPage = request()->query('page', 1);
    $response = Http::get($this->apiUrl . 'posts', [
      'categories' => 40,
      'per_page' => 10,
      'page' => $currentPage,
    ]);
    // dd($response->header('X-WP-TotalPages'));
    return view('fans.index', [
      'posts' => $response->json(),
      'currentPage' => $currentPage,
      'totalPages' => (int) $response->header('X-WP-TotalPages'),
    ]);
  }

  public function show($id)
  {
    $post = Http::get($this->apiUrl . "posts/{$id}")->json();
    // dd($post);
    if (array_key_exists('data', $post) && ($post['data']['status'] === 401 || $post['data']['status'] === 404) || $post['categories'] !== [40]) {
      // dd($post['data']['status']); // Debug: Check the 'data' structure
      abort(404);
    }

    if (array_key_exists('id', $post)) {
      return view('fans.show', ['post' => $post]);
    }
  }
}
