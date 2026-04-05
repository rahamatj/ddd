<?php

namespace App\Domains\Category\Repositories\Contracts;

use App\Domains\Category\Requests\StoreRequest;
use App\Domains\Category\Requests\UpdateRequest;

interface CategoryRepositoryInterface
{
    public function index();

    public function create();

    public function store(array $data);

    public function show($id);

    public function edit($id);

    public function update($id, array $data);

    public function destroy($id);
}
