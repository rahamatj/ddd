<?php

namespace App\Domains\Post\Actions;

use App\Domains\Post\DTO\CreatePostDTO;
use App\Domains\Post\Services\PostService;

class UpdateAction
{
    public function __construct(
        protected PostService $postService
    ) {}

    public function execute()
    {
        return $this->postService->update();
    }
}
