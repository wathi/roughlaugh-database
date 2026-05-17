<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class FansController extends Controller
{
  public function __construct(protected PostService $postService) {}

  public function index()
  {
    $currentPage = request()->query('page', 1);
    $result = $this->postService->getPostsByCategory(
      categoryId: 40,
      cachePrefix: 'fans',
      perPage: 20,
      page: $currentPage
    );

    return response()
      ->view('fans.index', [
        'posts' => $result['posts'],
        'currentPage' => $currentPage,
        'totalPages' => $result['totalPages'],
      ])
      ->header('X-Cache', $result['isCached'] ? 'HIT' : 'MISS');
  }

  public function show(int $id)
  {
    $result = $this->postService->getPostById(
      $id,
      categoryId: 40,
      cachePrefix: 'fans'
    );

    return response()
      ->view('fans.show', ['post' => $result['post']])
      ->header('X-Cache', $result['isCached'] ? 'HIT' : 'MISS');
  }
}
