<?php

namespace App\Domains\Student\DTO;

class ReadDTO
{
    public function __construct(

    )
    {}

    public static function fromRequest($request)
    {
        return new self();
    }
}
