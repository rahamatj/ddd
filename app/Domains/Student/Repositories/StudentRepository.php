<?php

namespace App\Domains\Student\Repositories;

use App\Domains\Student\Repositories\Contracts\StudentRepositoryInterface
use App\Domains\Student\Models\Student
use App\Domains\Student\Requests\StoreRequest;
use App\Domains\Student\Requests\UpdateRequest;

class StudentRepository implements StudentRepositoryInterface
{
    public function index()
    {
        return Student::all();
    }

    // public function create() {}

    public function store(StoreRequest $request)
    {
        return Student::create($request->validated());
    }

    public function show(Student $student)
    {
        return $student;
    }

    // public function edit(Student $student);

    public function update(UpdateRequest $request, Student $student)
    {
        return $student->update($request->validated());
    }

    public function destroy(Student $student)
    {
        return $student->delete();
    }
}
