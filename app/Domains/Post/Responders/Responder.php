<?php

namespace App\Domains\Post\Responders;

class Responder
{
    public function respond($view = null, $data = null)
    {
        if ($view == null && $data != null)
            return response()->json([
                'data' => $data
            ]);
        else
            return view($view, [
                'data' => $data
            ]);
    }
}