<?php

namespace App\Domains\Category\Actions;

use App\Domains\Category\DTO\CreateCategoryDTO;
use App\Domains\Category\Services\CategoryService;

class UpdateAction
{
    public function __construct(
        protected CategoryService $categoryService
    ) {}

    public function execute(UpdateCategoryDTO $dto)
    {
        return $this->categoryService->updateCategory([
			'title' => $dto->title,
			'description' => $dto->description
        ]);
    }
}
