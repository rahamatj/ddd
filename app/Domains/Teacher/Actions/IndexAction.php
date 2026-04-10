<?php

namespace App\Domains\Teacher\Actions;

use App\Domains\Teacher\Services\TeacherService;;

class IndexAction
{
    public function __construct(
        protected TeacherService $teacherService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->teacherService->index($data);
        else
            return $this->teacherService->index();
    }
}
