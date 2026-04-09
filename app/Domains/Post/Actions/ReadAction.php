<?php

namespace App\Domains\Post\Actions;

use App\Domains\Post\DTO\CreatePostDTO;
use App\Domains\Post\Services\PostService;

class ReadAction
{
    public function __construct(
        protected PostService $postService
    ) {}

    public function execute()
    {
        return $this->postService->read();
    }
}
