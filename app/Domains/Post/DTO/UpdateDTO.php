<?php

namespace App\Domains\Post\DTO;

class UpdateDTO
{
    public function __construct(

    )
    {}

    public static function fromRequest($request)
    {
        return new self();
    }
}
