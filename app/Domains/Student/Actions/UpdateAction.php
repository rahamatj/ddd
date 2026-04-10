<?php

namespace App\Domains\Student\Actions;

use App\Domains\Student\Services\StudentService;;

class UpdateAction
{
    public function __construct(
        protected StudentService $studentService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->studentService->update($data);
        else
            return $this->studentService->update();
    }
}
