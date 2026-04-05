<?php

namespace App\Domains\Category\Repositories;

use App\Domains\Category\Repositories\Contracts\CategoryRepositoryInterface
use App\Domains\Category\Models\Category


class CategoryRepository implements CategoryRepositoryInterface
{
    public function index()
    {
        return Category::all();
    }

    // public function create() {}

    public function store(array $data)
    {
        return Category::create($data);
    }

    public function show($id)
    {
        return Category::findOrFail($id);
    }

    // public function edit($id);

    public function update($id, array $data)
    {
        $category = Category::findOrFail($id);
        $category->update($data);
        return $category;
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        return $category->delete();
    }
}
