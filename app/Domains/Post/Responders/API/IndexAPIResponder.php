<?php

namespace App\Domains\Post\Responders\API;

use App\Domains\Post\Responders\Contracts\IndexAPIResponderInterface;

class IndexAPIResponder implements IndexAPIResponderInterface
{
    public function respond($data)
    {
        $switch = config('ddd.response');

        return match ($switch) {
            'web' => $this->web($data),
            'api' => $this->api($data),
        };
    }

    protected function web($data)
    {
        return view('post.index', compact('data'));
    }

    protected function api($data)
    {
        return response()->json($data);
    }
}