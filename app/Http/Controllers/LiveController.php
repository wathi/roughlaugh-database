<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class LiveController extends Controller
{
  public function __construct(protected PostService $postService) {}

  public function index()
  {
    $currentPage = request()->query('page', 1);
    $result = $this->postService->getPostsByCategory(
      categoryId: 25,
      cachePrefix: 'live',
      perPage: 20,
      page: $currentPage
    );

    $song_list = $this->postService->getSongList();
    $song_list_map = [];
    foreach ($song_list as $song) {
      $song_list_map[$song['id']] = $song['title']['rendered'];
    }

    return response()
      ->view('live.index', [
        'posts' => $result['posts'],
        'currentPage' => $currentPage,
        'totalPages' => $result['totalPages'],
        'song_list_map' => $song_list_map,
      ])
      ->header('X-Cache', $result['isCached'] ? 'HIT' : 'MISS');
  }

  public function show(int $id)
  {
    $result = $this->postService->getPostById(
      $id,
      categoryId: 25,
      cachePrefix: 'live'
    );

    $postContent = $this->postService->clean_script_tags(
      $result['post']['content']['rendered']
    );

    return response()
      ->view('live.show', ['post' => $result['post'], 'postContent' => $postContent])
      ->header('X-Cache', $result['isCached'] ? 'HIT' : 'MISS');
  }
}
