<?php

namespace App\Domains\Student\Actions;

use App\Domains\Student\DTO\CreateStudentDTO;
use App\Domains\Student\Services\StudentService;

class UpdateAction
{
    public function __construct(
        protected StudentService $studentService
    ) {}

    public function execute(UpdateStudentDTO $dto)
    {
        return $this->studentService->updateStudent([
			'name' => $dto->name,
			'id' => $dto->id
        ]);
    }
}
