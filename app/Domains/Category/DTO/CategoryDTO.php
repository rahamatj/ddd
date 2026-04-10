<?php

namespace App\Domains\Category\DTO;

class CategoryDTO
{
    public function __construct(
			public $name,
			public $description,
    )
    {}

    public static function fromRequest($request)
    {
        return new self(
			$request->name,
			$request->description,
        );
    }
}
