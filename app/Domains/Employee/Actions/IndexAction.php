<?php

namespace App\Domains\Employee\Actions;

use App\Domains\Employee\Services\EmployeeService;;

class IndexAction
{
    public function __construct(
        protected EmployeeService $employeeService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->employeeService->index($data);
        else
            return $this->employeeService->index();
    }
}
