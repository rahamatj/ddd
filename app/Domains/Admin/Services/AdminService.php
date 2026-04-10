<?php

namespace App\Domains\Admin\Services;

use App\Domains\Admin\Repositories\Contracts\AdminRepositoryInterface;

class AdminService
{
    public function __construct(
        protected AdminRepositoryInterface $adminRepository
    ) {
    }

    public function index()
    {
        return $this->adminRepository->index();
    }

    public function store($data)
    {
        return $this->adminRepository->store($data);
    }

    public function show($id)
    {
        return $this->adminRepository->show($id); 
    }

    public function update($id, $data)
    {
        return $this->adminRepository->update($id, $data);
    }

    public function destroy($data)
    {
        return $this->adminRepository->destroy($data);
    }
}

