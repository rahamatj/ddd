<?php

namespace App\Domains\Teacher\Actions;

use App\Domains\Teacher\Services\TeacherService;;

class StoreAction
{
    public function __construct(
        protected TeacherService $teacherService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->teacherService->store($data);
        else
            return $this->teacherService->store();
    }
}
