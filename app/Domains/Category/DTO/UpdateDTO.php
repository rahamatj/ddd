<?php

namespace App\Domains\Category\DTO;

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
