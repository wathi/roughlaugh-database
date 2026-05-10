<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ArticleController extends Controller
{

    public function index()
    {
        $currentPage = request()->query('page', 1);
        $cacheKey = "article_{$currentPage}";
        $isCached = Cache::has($cacheKey);

        $data = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($currentPage) {
            $response = Http::get($this->apiUrl . 'posts', [
                'categories' => 23,
                'per_page' => 10,
                'page' => $currentPage,
            ]);
            return [
                'posts' => $response->json(),
                'totalPages' => (int) $response->header('X-WP-TotalPages'),
            ];
        });

        // dd($response->json());
        return response()->view('articles.index', [
            'posts' => $data['posts'],
            'currentPage' => $currentPage,
            'totalPages' => $data['totalPages'],
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
        if (array_key_exists('data', $post) && ($post['data']['status'] === 401 || $post['data']['status'] === 404)) {
            // dd($post['data']['status']); // Debug: Check the 'data' structure
            abort(404);
        }

        if (array_key_exists('id', $post)) {
            return response()->view('articles.show', ['post' => $post])->header('X-Cache', $isCached ? 'HIT' : 'MISS');
        }
    }
}
