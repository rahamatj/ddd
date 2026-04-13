<?php

namespace App\Domains\Employee\Services;

use App\Domains\Employee\Repositories\Contracts\EmployeeRepositoryInterface;

class EmployeeService
{
    public function __construct(
        protected EmployeeRepositoryInterface $employeeRepository
    ) {
    }

    public function index()
    {
        return $this->employeeRepository->index();
    }

    public function store($data)
    {
        return $this->employeeRepository->store($data);
    }

    public function show($id)
    {
        return $this->employeeRepository->show($id); 
    }

    public function update($id, $data)
    {
        return $this->employeeRepository->update($id, $data);
    }

    public function destroy($data)
    {
        return $this->employeeRepository->destroy($data);
    }
}

