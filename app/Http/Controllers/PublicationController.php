<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class PublicationController extends Controller
{
  public function __construct(protected PostService $postService) {}

  public function index()
  {
    $currentPage = request()->query('page', 1);
    $result = $this->postService->getPostsByCategory(
      categoryId: 24,
      cachePrefix: 'publication',
      perPage: 20,
      page: $currentPage
    );

    return response()
      ->view('publication.index', [
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
      categoryId: 24,
      cachePrefix: 'publication',
    );

    return response()
      ->view('publication.show', ['post' => $result['post']])
      ->header('X-Cache', $result['isCached'] ? 'HIT' : 'MISS');
  }
}
