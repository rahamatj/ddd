<?php

namespace App\Domains\Teacher\Services;

use App\Domains\Teacher\Repositories\Contracts\TeacherRepositoryInterface;

class TeacherService
{
    public function __construct(
        protected TeacherRepositoryInterface $teacherRepository
    ) {
    }

    public function index()
    {
        return $this->teacherRepository->index();
    }

    public function store($data)
    {
        return $this->teacherRepository->store($data);
    }

    public function show($id)
    {
        return $this->teacherRepository->show($id); 
    }

    public function update($id, $data)
    {
        return $this->teacherRepository->update($id, $data);
    }

    public function destroy($data)
    {
        return $this->teacherRepository->destroy($data);
    }
}

