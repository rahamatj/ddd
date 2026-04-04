<?php

namespace App\Domains\Product\DTO;

class CreateDTO
{
    public function __construct(

    )
    {}

    public static function fromRequest($request)
    {
        return new self();
    }
}
