<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\DTO\CreateProductDTO;
use App\Domains\Product\Services\ProductService;

class CreateAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute(CreateProductDTO $dto)
    {
        return $this->productService->createProduct([
			'name' => $dto->name,
			'description' => $dto->description,
			'price' => $dto->price
        ]);
    }
}
