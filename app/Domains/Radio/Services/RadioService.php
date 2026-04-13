<?php

namespace App\Domains\Radio\Services;

use App\Domains\Radio\Repositories\Contracts\RadioRepositoryInterface;

class RadioService
{
    public function __construct(
        protected RadioRepositoryInterface $radioRepository
    ) {
    }

    public function index()
    {
        return $this->radioRepository->index();
    }

    public function store($data)
    {
        return $this->radioRepository->store($data);
    }

    public function show($id)
    {
        return $this->radioRepository->show($id); 
    }

    public function update($id, $data)
    {
        return $this->radioRepository->update($id, $data);
    }

    public function destroy($data)
    {
        return $this->radioRepository->destroy($data);
    }
}

