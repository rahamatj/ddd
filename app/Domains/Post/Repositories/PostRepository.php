<?php

namespace App\Domains\Post\Repositories;

use App\Domains\Post\Repositories\Contracts\PostRepositoryInterface;
use App\Domains\Post\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function index()
    {
        return Post::all();
    }

    public function create() {}

    public function store($data)
    {
        return Post::create($data);
    }

    public function show($id)
    {
        return Post::findOrFail($id);
    }

    public function edit($id) {}

    public function update($id, $data)
    {
        $post = Post::findOrFail($id);
        $post->update($data);
        return $post;
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        return $post->delete();
    }
}
