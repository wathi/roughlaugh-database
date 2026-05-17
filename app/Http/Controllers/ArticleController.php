<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class ArticleController extends Controller
{
    public function __construct(protected PostService $postService) {}

    public function index()
    {
        $currentPage = request()->query('page', 1);
        $result = $this->postService->getPostsByCategory(
            categoryId: 23,
            cachePrefix: 'article',
            perPage: 20,
            page: $currentPage
        );

        return response()
            ->view('articles.index', [
                'posts' => $result['posts'],
                'currentPage' => $currentPage,
                'totalPages' => $result['totalPages'],
            ])
            ->header('X-Cache', $result['isCached'] ? 'HIT' : 'MISS');
    }
}
