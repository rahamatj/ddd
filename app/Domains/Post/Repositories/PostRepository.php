<?php

namespace App\Domains\Post\Repositories;

use App\Domains\Post\Repositories\Contracts\PostRepositoryInterface
use App\Domains\Post\Models\Post
use App\Domains\Post\Requests\StoreRequest;
use App\Domains\Post\Requests\UpdateRequest;

class PostRepository implements PostRepositoryInterface
{
    public function index()
    {
        return Post::all();
    }

    // public function create() {}

    public function store(StoreRequest $request)
    {
        return Post::create($request->validated());
    }

    public function show(Post $post)
    {
        return $post;
    }

    // public function edit(Post $post);

    public function update(UpdateRequest $request, Post $post)
    {
        return $post->update($request->validated());
    }

    public function destroy(Post $post)
    {
        return $post->delete();
    }
}
