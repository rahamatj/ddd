<?php

namespace App\Domains\Radio\Actions;

use App\Domains\Radio\Services\RadioService;;

class ShowAction
{
    public function __construct(
        protected RadioService $radioService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->radioService->show($data);
        else
            return $this->radioService->show();
    }
}
