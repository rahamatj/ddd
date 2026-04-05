<?php

namespace App\Domains\Category\DTO;

class UpdateDTO
{
    public function __construct(
			public $title,
			public $description,
    )
    {}

    public static function fromRequest($request)
    {
        return new self(
			$request->title,
			$request->description,
        );
    }
}
