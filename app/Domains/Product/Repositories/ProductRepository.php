<?php

namespace App\Domains\Product\Repositories;

use App\Domains\Product\Repositories\Contracts\ProductRepositoryInterface
use App\Domains\Product\Models\Product
use App\Domains\Product\Requests\StoreRequest;
use App\Domains\Product\Requests\UpdateRequest;

class ProductRepository implements ProductRepositoryInterface
{
    public function index()
    {
        return Product::all();
    }

    // public function create() {}

    public function store(StoreRequest $request)
    {
        return Product::create($request->validated());
    }

    public function show(Product $product)
    {
        return $product;
    }

    // public function edit(Product $product);

    public function update(UpdateRequest $request, Product $product)
    {
        return $product->update($request->validated());
    }

    public function destroy(Product $product)
    {
        return $product->delete();
    }
}
