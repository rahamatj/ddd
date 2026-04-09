<?php

namespace App\Domains\Post\Responders\API;

use App\Domains\Post\Responders\Contracts\ResponderInterface;

class APIResponder implements ResponderInterface
{
    public function respond($data)
    {
        return response()->json($data);
    }
}