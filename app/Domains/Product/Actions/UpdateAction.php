<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\Services\ProductService;;

class UpdateAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->productService->update($data);
        else
            return $this->productService->update();
    }
}
