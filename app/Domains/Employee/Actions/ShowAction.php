<?php

namespace App\Domains\Employee\Actions;

use App\Domains\Employee\Services\EmployeeService;;

class ShowAction
{
    public function __construct(
        protected EmployeeService $employeeService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->employeeService->show($data);
        else
            return $this->employeeService->show();
    }
}
