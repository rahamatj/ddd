<?php

namespace App\Domains\Teacher\Actions;

use App\Domains\Teacher\Services\TeacherService;;

class DestroyAction
{
    public function __construct(
        protected TeacherService $teacherService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->teacherService->destroy($data);
        else
            return $this->teacherService->destroy();
    }
}
