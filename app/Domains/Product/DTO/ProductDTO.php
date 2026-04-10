<?php

namespace App\Domains\Product\DTO;

class ProductDTO
{
    public function __construct(
			public $name,
			public $price,
    )
    {}

    public static function fromRequest($request)
    {
        return new self(
			$request->name,
			$request->price,
        );
    }
}
