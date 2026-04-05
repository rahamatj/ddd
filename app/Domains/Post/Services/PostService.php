<?php

namespace App\Domains\Post\Services;

use App\Domains\Post\Repositories\Contracts\PostRepositoryInterface;

class PostService
{
    public function __construct(
        protected PostRepositoryInterface $postRepository
    ) {
    }

    public function index()
    {
        return $this->postRepository->index();
    }

    public function store($data)
    {
        return $this->postRepository->store($data);
    }

    public function show($data)
    {
        return $this->postRepository->show($data); 
    }

    public function update($data)
    {
        return $this->postRepository->update($data);
    }

    public function destroy($data)
    {
        return $this->postRepository->destroy($data);
    }
}

