<?php

namespace App\Domains\Radio\Repositories\Contracts;

interface RadioRepositoryInterface
{
    public function index();

    public function create();

    public function store($data);

    public function show($id);

    public function edit($id);

    public function update($id, $data);

    public function destroy($id);
}
