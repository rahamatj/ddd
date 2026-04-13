<?php

namespace App\Domains\Employee\Repositories;

use App\Domains\Employee\Repositories\Contracts\EmployeeRepositoryInterface;
use App\Domains\Employee\Models\Employee;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function index()
    {
        return Employee::all();
    }

    public function create() {}

    public function store($data)
    {
        return Employee::create($data);
    }

    public function show($id)
    {
        return Employee::findOrFail($id);
    }

    public function edit($id) {}

    public function update($id, $data)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($data);
        return $employee;
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        return $employee->delete();
    }
}
