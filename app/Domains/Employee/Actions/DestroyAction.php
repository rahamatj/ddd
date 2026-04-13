<?php

namespace App\Domains\Employee\Actions;

use App\Domains\Employee\Services\EmployeeService;;

class DestroyAction
{
    public function __construct(
        protected EmployeeService $employeeService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->employeeService->destroy($data);
        else
            return $this->employeeService->destroy();
    }
}
