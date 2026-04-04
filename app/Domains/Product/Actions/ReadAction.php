<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\DTO\CreateProductDTO;
use App\Domains\Product\Services\ProductService;

class ReadAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute(ReadProductDTO $dto)
    {
        return $this->productService->readProduct([
			'name' => $dto->name,
			'description' => $dto->description,
			'price' => $dto->price
        ]);
    }
}
