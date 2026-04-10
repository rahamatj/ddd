<?php

namespace App\Domains\Category\Actions;

use App\Domains\Category\Services\CategoryService;;

class CreateAction
{
    public function __construct(
        protected CategoryService $categoryService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->categoryService->create($data);
        else
            return $this->categoryService->create();
    }
}
