<?php

namespace App\Domains\Post\Actions;

use App\Domains\Post\Services\PostService;;

class ShowAction
{
    public function __construct(
        protected PostService $postService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->postService->show($data);
        else
            return $this->postService->show();
    }
}
