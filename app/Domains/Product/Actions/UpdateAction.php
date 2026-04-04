<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\DTO\CreateProductDTO;
use App\Domains\Product\Services\ProductService;

class UpdateAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute(UpdateProductDTO $dto)
    {
        return $this->productService->updateProduct([
			'name' => $dto->name,
			'description' => $dto->description,
			'price' => $dto->price
        ]);
    }
}
