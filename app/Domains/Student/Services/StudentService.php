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

    public function show($data)
    {
        return $this->studentRepository->show($data); 
    }

    public function update($data)
    {
        return $this->studentRepository->update($data);
    }

    public function destroy($data)
    {
        return $this->studentRepository->destroy($data);
    }
}

