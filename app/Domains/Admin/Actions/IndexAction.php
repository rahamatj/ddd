<?php

namespace App\Domains\Admin\Actions;

use App\Domains\Admin\Services\AdminService;;

class IndexAction
{
    public function __construct(
        protected AdminService $adminService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->adminService->index($data);
        else
            return $this->adminService->index();
    }
}
