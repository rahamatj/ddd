<?php

namespace App\Domains\Post\Actions;

use App\Domains\Post\DTO\CreatePostDTO;
use App\Domains\Post\Services\PostService;

class CreateAction
{
    public function __construct(
        protected PostService $postService
    ) {}

    public function execute(CreatePostDTO $dto)
    {
        return $this->postService->createPost([
			'title' => $dto->title,
			'description' => $dto->description
        ]);
    }
}
