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
    // $response = Cache::remember('home_page', now()->addMinutes(10), function () {
    //   return Http::get($this->apiUrl . 'pages', [
    //     'slug' => 'home',
    //   ])->json()[0];
    // });
    // dd($result['page']['content']['rendered']);
    $content = $this->postService->clean_script_tags(
      $result['page']['content']['rendered']
    );

    return response()->view('home', [
      'page' => $content,
    ])->header('X-Cache', $result['isCached'] ? 'HIT' : 'MISS');
  }
}
