<?php

namespace App\Domains\Post\Responders\Contracts;

interface ResponderInterface
{
    public function respond($data);
}