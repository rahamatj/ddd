<?php

namespace App\Domains\Category\Services;

use App\Domains\Category\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryService
{
    public function __construct(
        protected CategoryRepositoryInterface $categoryRepository
    ) {
    }

    public function index()
    {
        return $this->categoryRepository->index();
    }

    public function store($data)
    {
        return $this->categoryRepository->store($data);
    }

    public function show($id)
    {
        return $this->categoryRepository->show($id); 
    }

    public function update($id, $data)
    {
        return $this->categoryRepository->update($id, $data);
    }

    public function destroy($data)
    {
        return $this->categoryRepository->destroy($data);
    }
}

