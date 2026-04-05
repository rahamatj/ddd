<?php

namespace App\Domains\Post\Repositories\Contracts;

use App\Domains\Post\Requests\StoreRequest;
use App\Domains\Post\Requests\UpdateRequest;

interface PostRepositoryInterface
{
    public function index();

    public function create();

    public function store(StoreRequest $request);

    public function show(Post $post);

    public function edit(Post $post);

    public function update(UpdateRequest $request, Post $post);

    public function destroy(Post $post);
}
