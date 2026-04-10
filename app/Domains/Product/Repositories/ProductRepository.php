<?php

namespace App\Domains\Product\Repositories;

use App\Domains\Product\Repositories\Contracts\ProductRepositoryInterface;
use App\Domains\Product\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function index()
    {
        return Product::all();
    }

    public function create() {}

    public function store($data)
    {
        return Product::create($data);
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function edit($id) {}

    public function update($id, $data)
    {
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        return $product->delete();
    }
}
