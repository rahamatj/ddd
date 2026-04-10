<?php

namespace App\Domains\Admin\DTO;

class AdminDTO
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
