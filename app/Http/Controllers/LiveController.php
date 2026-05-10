<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class LiveController extends Controller
{
  public function index()
  {
    $currentPage = request()->query('page', 1);
    $cacheKey = "live_{$currentPage}";
    $isCached = Cache::has($cacheKey);

    $data = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($currentPage) {
      $response = Http::get($this->apiUrl . 'posts', [
        'categories' => 25,
        'per_page' => 10,
        'page' => $currentPage,
      ]);
      return [
        'posts' => $response->json(),
        'totalPages' => (int) $response->header('X-WP-TotalPages'),
      ];
    });
    // dd($response->json());
    $posts = $data['posts'];
    $totalPages = $data['totalPages'];

    $song_list = Cache::remember('song_list', now()->addMinutes(10), function () {
      return Http::get($this->apiUrl . 'song', ['per_page' => 100])->json();
    });
    // dd($song_list);
    $song_list_map = [];
    foreach ($song_list as $song) {
      $song_list_map[$song['id']] = $song['title']['rendered'];
    }
    // dd($song_list_map);

    return response()->view('live.index', [
      'posts' => $posts,
      'currentPage' => $currentPage,
      'totalPages' => $totalPages,
      'song_list_map' => $song_list_map,
    ])->header('X-Cache', $isCached ? 'HIT' : 'MISS');
  }

  public function show($id)
  {
    $cacheKey = "post_{$id}";
    $isCached = Cache::has($cacheKey);

    $post = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($id) {
      return Http::get($this->apiUrl . "posts/{$id}")->json();
    });
    // dd($post);
    if (array_key_exists('data', $post) && ($post['data']['status'] === 401 || $post['data']['status'] === 404) || $post['categories'] !== [25]) {
      // dd($post['data']['status']); // Debug: Check the 'data' structure
      abort(404);
    }

    if (array_key_exists('id', $post)) {
      // dd($post); // Debug: Check the post data structure
      return response()->view('live.show', ['post' => $post])->header('X-Cache', $isCached ? 'HIT' : 'MISS');
    }
  }

  // public function get_set_list()
  // {
  //   $set_list = Http::get($this->apiUrl . 'set_list');
  //   dd($set_list->json());
  // }
}
