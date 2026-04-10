<?php

namespace App\Domains\Admin\Actions;

use App\Domains\Admin\Services\AdminService;;

class ShowAction
{
    public function __construct(
        protected AdminService $adminService
    ) {}

    public function execute($data = [])
    {
        if (!empty($data))
            return $this->adminService->show($data);
        else
            return $this->adminService->show();
    }
}
