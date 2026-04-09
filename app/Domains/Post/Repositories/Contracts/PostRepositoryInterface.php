<?php

namespace App\Domains\Post\Repositories\Contracts;

interface PostRepositoryInterface
{
    public function index();

    public function create();

    public function store($data);

    public function show($id);

    public function edit($id);

    public function update($id, $data);

    public function destroy($id);
}
