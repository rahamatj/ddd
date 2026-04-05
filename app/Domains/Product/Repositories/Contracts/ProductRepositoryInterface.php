<?php

namespace App\Domains\Product\Repositories\Contracts;

use App\Domains\Product\Requests\StoreRequest;
use App\Domains\Product\Requests\UpdateRequest;

interface ProductRepositoryInterface
{
    public function index();

    public function create();

    public function store(StoreRequest $request);

    public function show(Product $product);

    public function edit(Product $product);

    public function update(UpdateRequest $request, Product $product);

    public function destroy(Product $product);
}
