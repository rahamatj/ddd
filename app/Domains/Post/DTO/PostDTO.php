<?php

namespace App\Domains\Post\DTO;

class PostDTO
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
