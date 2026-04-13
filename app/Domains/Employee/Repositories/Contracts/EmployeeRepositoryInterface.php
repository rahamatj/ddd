<?php

namespace App\Domains\Employee\Repositories\Contracts;

interface EmployeeRepositoryInterface
{
    public function index();

    public function create();

    public function store($data);

    public function show($id);

    public function edit($id);

    public function update($id, $data);

    public function destroy($id);
}
