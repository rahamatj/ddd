<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\DTO\CreateProductDTO;
use App\Domains\Product\Services\ProductService;

class DeleteAction
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function execute(DeleteProductDTO $dto)
    {
        return $this->productService->deleteProduct([
			'name' => $dto->name,
			'description' => $dto->description,
			'price' => $dto->price
        ]);
    }
}
