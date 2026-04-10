<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\Services\ProductService;;

class CreateAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->productService->create($data);
        else
            return $this->productService->create();
    }
}
