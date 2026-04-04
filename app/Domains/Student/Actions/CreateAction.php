<?php

namespace App\Domains\Student\Actions;

use App\Domains\Student\DTO\CreateStudentDTO;
use App\Domains\Student\Services\StudentService;

class CreateAction
{
    public function __construct(
        protected StudentService $studentService
    ) {}

    public function execute(CreateStudentDTO $dto)
    {
        return $this->studentService->createStudent([
			'name' => $dto->name,
			'id' => $dto->id
        ]);
    }
}
