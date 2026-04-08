<?php

namespace App\Domains\Post\Responders\Web;

use App\Domains\Post\Responders\Contracts\ResponderInterface;

class DeleteWebResponder implements ResponderInterface
{
    public function index($data)
    {
        return 'index';
    }

    public function store($data)
    {
        return 'store';
    }

    public function show($data)
    {
        return 'show';
    }

    public function update($data)
    {
        return 'update';
    }

    public function destroy($data)
    {
        return 'destroy';
    }
}