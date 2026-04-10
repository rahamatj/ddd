<?php

namespace App\Domains\Teacher\Actions;

use App\Domains\Teacher\Services\TeacherService;;

class UpdateAction
{
    public function __construct(
        protected TeacherService $teacherService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->teacherService->update($data);
        else
            return $this->teacherService->update();
    }
}
