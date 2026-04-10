<?php

namespace App\Domains\Student\Services;

use App\Domains\Student\Repositories\Contracts\StudentRepositoryInterface;

class StudentService
{
    public function __construct(
        protected StudentRepositoryInterface $studentRepository
    ) {
    }

    public function index()
    {
        return $this->studentRepository->index();
    }

    public function store($data)
    {
        return $this->studentRepository->store($data);
    }

    public function show($id)
    {
        return $this->studentRepository->show($id); 
    }

    public function update($id, $data)
    {
        return $this->studentRepository->update($id, $data);
    }

    public function destroy($data)
    {
        return $this->studentRepository->destroy($data);
    }
}

