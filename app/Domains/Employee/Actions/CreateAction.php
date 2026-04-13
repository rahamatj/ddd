<?php

namespace App\Domains\Employee\Actions;

use App\Domains\Employee\Services\EmployeeService;;

class CreateAction
{
    public function __construct(
        protected EmployeeService $employeeService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->employeeService->create($data);
        else
            return $this->employeeService->create();
    }
}
