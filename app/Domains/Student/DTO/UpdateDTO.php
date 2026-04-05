<?php

namespace App\Domains\Student\DTO;

class UpdateDTO
{
    public function __construct(
			public $name,
			public $id,
    )
    {}

    public static function fromRequest($request)
    {
        return new self(
			$request->name,
			$request->id,
        );
    }
}
