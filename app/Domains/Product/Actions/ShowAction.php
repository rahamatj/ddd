<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\Services\ProductService;;

class ShowAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->productService->show($data);
        else
            return $this->productService->show();
    }
}
