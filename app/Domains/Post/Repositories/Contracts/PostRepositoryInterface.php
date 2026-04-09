<?php

namespace App\Domains\Post\Repositories\Contracts;



interface PostRepositoryInterface
{
    public function index();

    public function store(array $data);

    public function show($id);

    public function update($id, array $data);

    public function destroy($id);
}
