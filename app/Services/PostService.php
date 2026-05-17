<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class PostService
{
  protected string $apiUrl;

  public function __construct()
  {
    $this->apiUrl = config('services.api.api_url');
  }

  public function getPage(
    string $cachePrefix,
    string $slug
  ) {
    $cacheKey = "{$cachePrefix}";
    $isCached = Cache::has($cacheKey);

    $data = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($slug) {
      $response =  Http::get($this->apiUrl . 'pages', [
        'slug' => $slug,
      ]);

      return [
        'page' => $response->json()[0],
      ];
    });

    return [
      'page' => $data['page'],
      'isCached' => $isCached,
    ];
  }

  /**
   * Get paginated posts for a category
   */
  public function getPostsByCategory(
    int $categoryId,
    string $cachePrefix,
    int $perPage = 20,
    int $page = 1
  ): array {
    $cacheKey = "{$cachePrefix}_{$page}";
    $isCached = Cache::has($cacheKey);

    $data = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($categoryId, $perPage, $page) {
      $response = Http::get($this->apiUrl . 'posts', [
        'categories' => $categoryId,
        'per_page' => $perPage,
        'page' => $page,
      ]);

      return [
        'posts' => $response->json(),
        'totalPages' => (int) $response->header('X-WP-TotalPages'),
      ];
    });

    return [
      'posts' => $data['posts'],
      'totalPages' => $data['totalPages'],
      'isCached' => $isCached,
    ];
  }

  /**
   * Get a single post by ID
   */
  public function getPostById(
    int $id,
    int $categoryId,
    string $cachePrefix
  ): array {
    $cacheKey = "{$cachePrefix}_post_{$id}";
    $isCached = Cache::has($cacheKey);

    $post = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($id) {
      return Http::get($this->apiUrl . "posts/{$id}")->json();
    });

    $this->validatePost($post, $categoryId);

    return [
      'post' => $post,
      'isCached' => $isCached,
    ];
  }

  /**
   * Validate that post belongs to category
   */
  protected function validatePost(array $post, int $categoryId): void
  {
    // Check for error responses
    if (
      array_key_exists('data', $post) &&
      in_array($post['data']['status'] ?? null, [401, 404], true)
    ) {
      abort(404);
    }

    // Check category matches
    if (!isset($post['categories']) || $post['categories'] !== [$categoryId]) {
      abort(404);
    }
  }

  public function getSongList(): array
  {
    $data = Cache::remember('song_list', now()->addMinutes(10), function () {
      return  Http::get($this->apiUrl . 'song', ['per_page' => 100])->json();
    });
    return $data;
  }

  public function clean_script_tags(string $html): string
  {
    return preg_replace(
      '/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/i',
      '',
      $html
    );
  }
}
