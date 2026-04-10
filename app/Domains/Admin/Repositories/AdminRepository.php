<?php

namespace App\Domains\Admin\Repositories;

use App\Domains\Admin\Repositories\Contracts\AdminRepositoryInterface;
use App\Domains\Admin\Models\Admin;

class AdminRepository implements AdminRepositoryInterface
{
    public function index()
    {
        return Admin::all();
    }

    public function create() {}

    public function store($data)
    {
        return Admin::create($data);
    }

    public function show($id)
    {
        return Admin::findOrFail($id);
    }

    public function edit($id) {}

    public function update($id, $data)
    {
        $admin = Admin::findOrFail($id);
        $admin->update($data);
        return $admin;
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        return $admin->delete();
    }
}
