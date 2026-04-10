<?php

namespace App\Domains\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Domains\Admin\Actions\IndexAction;
use App\Domains\Admin\Actions\CreateAction;
use App\Domains\Admin\Actions\StoreAction;
use App\Domains\Admin\Actions\ShowAction;
use App\Domains\Admin\Actions\UpdateAction;
use App\Domains\Admin\Actions\DestroyAction;
use App\Domains\Admin\Requests\StoreRequest;
use App\Domains\Admin\Requests\UpdateRequest;
use App\Domains\Admin\Responders\Responder;
use App\Domains\Admin\Models\Admin;

class AdminController extends Controller
{
    public function __construct(
        protected IndexAction $indexAction,
        protected CreateAction $createAction,
        protected StoreAction $storeAction,
        protected ShowAction $showAction,
        protected UpdateAction $updateAction,
        protected DestroyAction $destroyAction,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->indexAction->execute();

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return responder()->respond()->withView('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $this->storeAction->execute($request->validated());

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $Admin)
    {
        return responder()->respond()->withJSON([
            'data' => $Admin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $Admin)
    {
        return responder()->respond()->withView('posts.edit', [
            'data' => $Admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Admin $Admin)
    {
        $data = $this->updateAction->execute($request->validated());

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $Admin)
    {
        $data = $this->destroyAction->execute();

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }
}
