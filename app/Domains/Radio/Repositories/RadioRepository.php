<?php

namespace App\Domains\Radio\Repositories;

use App\Domains\Radio\Repositories\Contracts\RadioRepositoryInterface;
use App\Domains\Radio\Models\Radio;

class RadioRepository implements RadioRepositoryInterface
{
    public function index()
    {
        return Radio::all();
    }

    public function create() {}

    public function store($data)
    {
        return Radio::create($data);
    }

    public function show($id)
    {
        return Radio::findOrFail($id);
    }

    public function edit($id) {}

    public function update($id, $data)
    {
        $radio = Radio::findOrFail($id);
        $radio->update($data);
        return $radio;
    }

    public function destroy($id)
    {
        $radio = Radio::findOrFail($id);
        return $radio->delete();
    }
}
