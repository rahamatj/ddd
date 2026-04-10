<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\Services\ProductService;;

class DestroyAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->productService->destroy($data);
        else
            return $this->productService->destroy();
    }
}
