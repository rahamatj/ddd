<?php

namespace App\Domains\Teacher\Repositories;

use App\Domains\Teacher\Repositories\Contracts\TeacherRepositoryInterface;
use App\Domains\Teacher\Models\Teacher;

class TeacherRepository implements TeacherRepositoryInterface
{
    public function index()
    {
        return Teacher::all();
    }

    public function create() {}

    public function store($data)
    {
        return Teacher::create($data);
    }

    public function show($id)
    {
        return Teacher::findOrFail($id);
    }

    public function edit($id) {}

    public function update($id, $data)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($data);
        return $teacher;
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        return $teacher->delete();
    }
}
