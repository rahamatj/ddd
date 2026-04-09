<?php

namespace App\Domains\Post\Responders\Web;

use App\Domains\Post\Responders\Contracts\ResponderInterface;

class WebResponder implements ResponderInterface
{
    public function respond($data)
    {
        return view('post.index');
    }
}