<?php

namespace App\Domains\Category\DTO;

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
