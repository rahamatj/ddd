<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\Services\ProductService;;

class IndexAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->productService->index($data);
        else
            return $this->productService->index();
    }
}
