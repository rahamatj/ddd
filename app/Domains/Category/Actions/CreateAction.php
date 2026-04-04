<?php

namespace App\Domains\Category\Actions;

use App\Domains\Category\DTO\CreateCategoryDTO;
use App\Domains\Category\Services\CategoryService;

class CreateAction
{
    public function __construct(
        protected CategoryService $categoryService
    ) {}

    public function execute(CreateCategoryDTO $dto)
    {
        return $this->categoryService->createCategory([
			'title' => $dto->title,
			'description' => $dto->description
        ]);
    }
}
