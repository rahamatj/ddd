<?php

namespace App\Domains\Radio\DTO;

class RadioDTO
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
