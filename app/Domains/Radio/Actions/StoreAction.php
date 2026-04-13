<?php

namespace App\Domains\Radio\Actions;

use App\Domains\Radio\Services\RadioService;;

class StoreAction
{
    public function __construct(
        protected RadioService $radioService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->radioService->store($data);
        else
            return $this->radioService->store();
    }
}
