<?php

namespace App\Domains\Radio\Actions;

use App\Domains\Radio\Services\RadioService;;

class UpdateAction
{
    public function __construct(
        protected RadioService $radioService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->radioService->update($data);
        else
            return $this->radioService->update();
    }
}
