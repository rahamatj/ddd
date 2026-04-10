<?php

namespace App\Domains\Teacher\Repositories\Contracts;

interface TeacherRepositoryInterface
{
    public function index();

    public function create();

    public function store($data);

    public function show($id);

    public function edit($id);

    public function update($id, $data);

    public function destroy($id);
}
