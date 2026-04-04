<?php

namespace App\Domains\Post\Actions;

use App\Domains\Post\DTO\CreatePostDTO;
use App\Domains\Post\Services\PostService;

class DeleteAction
{
    public function __construct(
        protected PostService $postService
    ) {}

    public function execute(DeletePostDTO $dto)
    {
        return $this->postService->deletePost([
			'title' => $dto->title,
			'description' => $dto->description
        ]);
    }
}
