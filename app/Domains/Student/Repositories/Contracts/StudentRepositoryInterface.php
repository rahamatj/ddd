<?php

namespace App\Domains\Student\Repositories\Contracts;

use App\Domains\Student\Requests\StoreRequest;
use App\Domains\Student\Requests\UpdateRequest;

interface StudentRepositoryInterface
{
    public function index();

    public function create();

    public function store(StoreRequest $request);

    public function show(Student $student);

    public function edit(Student $student);

    public function update(UpdateRequest $request, Student $student);

    public function destroy(Student $student);
}
