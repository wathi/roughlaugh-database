<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class HomeController extends Controller
{
  public function __construct(protected PostService $postService) {}

  public function index()
  {
    $result = $this->postService->getPage(
      cachePrefix: 'home_page',
      slug: 'home'
    );

    $content = $this->postService->clean_script_tags(
      $result['page']['content']['rendered']
    );

    return response()->view('home', [
      'page' => $content,
    ])->header('X-Cache', $result['isCached'] ? 'HIT' : 'MISS');
  }
}
