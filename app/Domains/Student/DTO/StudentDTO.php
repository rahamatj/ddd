<?php

namespace App\Domains\Student\DTO;

class StudentDTO
{
    public function __construct(
			public $name,
			public $age,
    )
    {}

    public static function fromRequest($request)
    {
        return new self(
			$request->name,
			$request->age,
        );
    }
}
