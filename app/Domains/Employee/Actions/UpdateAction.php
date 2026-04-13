<?php

namespace App\Domains\Employee\Actions;

use App\Domains\Employee\Services\EmployeeService;;

class UpdateAction
{
    public function __construct(
        protected EmployeeService $employeeService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->employeeService->update($data);
        else
            return $this->employeeService->update();
    }
}
