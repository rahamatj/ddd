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

    public function show($id)
    {
        return $this->postRepository->show($id); 
    }

    public function update($id, $data)
    {
        return $this->postRepository->update($id, $data);
    }

    public function destroy($id)
    {
        return $this->postRepository->destroy($id);
    }
}

