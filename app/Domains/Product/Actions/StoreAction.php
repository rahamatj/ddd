<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\Services\ProductService;;

class StoreAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->productService->store($data);
        else
            return $this->productService->store();
    }
}
