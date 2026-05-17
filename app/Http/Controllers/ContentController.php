<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class ContentController extends Controller
{
    public function __construct(protected PostService $postService) {}

    public function index()
    {
        $currentPage = request()->query('page', 1);
        $result = $this->postService->getPostsByCategory(
            categoryId: 21,
            cachePrefix: 'content',
            perPage: 20,
            page: $currentPage
        );

        return response()
            ->view('contents.index', [
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
            categoryId: 21,
            cachePrefix: 'content'
        );

        return response()
            ->view('contents.show', ['post' => $result['post']])
            ->header('X-Cache', $result['isCached'] ? 'HIT' : 'MISS');
    }
}
