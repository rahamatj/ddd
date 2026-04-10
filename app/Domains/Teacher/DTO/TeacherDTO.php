<?php

namespace App\Domains\Teacher\DTO;

class TeacherDTO
{
    public function __construct(
			public $name,
			public $salary,
    )
    {}

    public static function fromRequest($request)
    {
        return new self(
			$request->name,
			$request->salary,
        );
    }
}
