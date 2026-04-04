<?php

namespace App\Domains\Student\Actions;

use App\Domains\Student\DTO\CreateStudentDTO;
use App\Domains\Student\Services\StudentService;

class DeleteAction
{
    public function __construct(
        protected StudentService $studentService
    ) {}

    public function execute(DeleteStudentDTO $dto)
    {
        return $this->studentService->deleteStudent([
			'name' => $dto->name,
			'id' => $dto->id
        ]);
    }
}
