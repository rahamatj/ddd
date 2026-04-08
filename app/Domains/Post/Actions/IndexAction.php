<?php

namespace App\Domains\Post\Actions;


use App\Domains\Post\Services\PostService;

class IndexAction
{
    public function __construct(
        protected PostService $postService
    ) {
    }

    public function execute()
    {
        return $this->postService->index();
    }
}
