<?php

namespace App\Domains\Product\Services;

use App\Domains\Product\Repositories\Contracts\ProductRepositoryInterface;

class ProductService
{
    public function __construct(
        protected ProductRepositoryInterface $productRepository
    ) {
    }

    public function index()
    {
        return $this->productRepository->index();
    }

    public function store($data)
    {
        return $this->productRepository->store($data);
    }

    public function show($id)
    {
        return $this->productRepository->show($id); 
    }

    public function update($id, $data)
    {
        return $this->productRepository->update($id, $data);
    }

    public function destroy($data)
    {
        return $this->productRepository->destroy($data);
    }
}

