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
    // dd($response->json());
    $posts = $response->json();

    $set_list = Http::get($this->apiUrl . 'song', ['per_page' => 100])->json();
    // dd($set_list);
    $set_list_map = [];
    foreach ($set_list as $song) {
      $set_list_map[$song['id']] = $song['title']['rendered'];
    }
    // dd($set_list_map);

    return view('live.index', [
      'posts' => $posts,
      'currentPage' => $currentPage,
      'totalPages' => (int) $response->header('X-WP-TotalPages'),
      'set_list_map' => $set_list_map,
    ]);
  }

  public function show($id)
  {
    $post = Http::get($this->apiUrl . "posts/{$id}")->json();
    // dd($post);
    if (array_key_exists('data', $post) && ($post['data']['status'] === 401 || $post['data']['status'] === 404) || $post['categories'] !== [25]) {
      // dd($post['data']['status']); // Debug: Check the 'data' structure
      abort(404);
    }

    if (array_key_exists('id', $post)) {
      // dd($post); // Debug: Check the post data structure
      return view('live.show', ['post' => $post]);
    }
  }

  public function get_set_list()
  {
    $set_list = Http::get($this->apiUrl . 'set_list');
    dd($set_list->json());
  }
}
