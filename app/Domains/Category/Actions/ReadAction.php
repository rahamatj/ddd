<?php

namespace App\Domains\Category\Actions;

use App\Domains\Category\DTO\CreateCategoryDTO;
use App\Domains\Category\Services\CategoryService;

class ReadAction
{
    public function __construct(
        protected CategoryService $categoryService
    ) {}

    public function execute(ReadCategoryDTO $dto)
    {
        return $this->categoryService->readCategory([
			'title' => $dto->title,
			'description' => $dto->description
        ]);
    }
}
