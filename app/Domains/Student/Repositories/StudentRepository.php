<?php

namespace App\Domains\Student\Repositories;

use App\Domains\Student\Repositories\Contracts\StudentRepositoryInterface;
use App\Domains\Student\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function index()
    {
        return Student::all();
    }

    public function create() {}

    public function store($data)
    {
        return Student::create($data);
    }

    public function show($id)
    {
        return Student::findOrFail($id);
    }

    public function edit($id) {}

    public function update($id, $data)
    {
        $student = Student::findOrFail($id);
        $student->update($data);
        return $student;
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        return $student->delete();
    }
}
