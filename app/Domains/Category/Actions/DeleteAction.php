<?php

namespace App\Domains\Category\Actions;

use App\Domains\Category\DTO\CreateCategoryDTO;
use App\Domains\Category\Services\CategoryService;

class DeleteAction
{
    public function __construct(
        protected CategoryService $categoryService
    ) {}

    public function execute(DeleteCategoryDTO $dto)
    {
        return $this->categoryService->deleteCategory([
			'title' => $dto->title,
			'description' => $dto->description
        ]);
    }
}
