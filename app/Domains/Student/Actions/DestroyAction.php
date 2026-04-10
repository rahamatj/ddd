<?php

namespace App\Domains\Student\Actions;

use App\Domains\Student\Services\StudentService;;

class DestroyAction
{
    public function __construct(
        protected StudentService $studentService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->studentService->destroy($data);
        else
            return $this->studentService->destroy();
    }
}
