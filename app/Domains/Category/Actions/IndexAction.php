<?php

namespace App\Domains\Category\Actions;

use App\Domains\Category\Services\CategoryService;;

class IndexAction
{
    public function __construct(
        protected CategoryService $categoryService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->categoryService->index($data);
        else
            return $this->categoryService->index();
    }
}
