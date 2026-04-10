<?php

namespace App\Domains\Category\Actions;

use App\Domains\Category\Services\CategoryService;;

class DestroyAction
{
    public function __construct(
        protected CategoryService $categoryService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->categoryService->destroy($data);
        else
            return $this->categoryService->destroy();
    }
}
