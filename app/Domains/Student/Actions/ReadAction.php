<?php

namespace App\Domains\Student\Actions;

use App\Domains\Student\DTO\CreateStudentDTO;
use App\Domains\Student\Services\StudentService;

class ReadAction
{
    public function __construct(
        protected StudentService $studentService
    ) {}

    public function execute(ReadStudentDTO $dto)
    {
        return $this->studentService->readStudent([
			'name' => $dto->name,
			'id' => $dto->id
        ]);
    }
}
