<?php

namespace App\Domains\Post\DTO;

class DeleteDTO
{
    public function __construct(

    )
    {}

    public static function fromRequest($request)
    {
        return new self();
    }
}
