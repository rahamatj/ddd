<?php

namespace App\Domains\Product\DTO;

class DeleteDTO
{
    public function __construct(
			public $name,
			public $description,
			public $price,
    )
    {}

    public static function fromRequest($request)
    {
        return new self(
			$request->name,
			$request->description,
			$request->price,
        );
    }
}
