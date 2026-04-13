<?php

namespace App\Domains\Employee\Controllers;

use App\Http\Controllers\Controller;
use App\Domains\Employee\Actions\IndexAction;
use App\Domains\Employee\Actions\CreateAction;
use App\Domains\Employee\Actions\StoreAction;
use App\Domains\Employee\Actions\ShowAction;
use App\Domains\Employee\Actions\UpdateAction;
use App\Domains\Employee\Actions\DestroyAction;
use App\Domains\Employee\Requests\StoreRequest;
use App\Domains\Employee\Requests\UpdateRequest;
use App\Domains\Employee\Responders\Responder;
use App\Domains\Employee\Models\Employee;

class EmployeeController extends Controller
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
    public function show(Employee $Employee)
    {
        return responder()->respond()->withJSON([
            'data' => $Employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $Employee)
    {
        return responder()->respond()->withView('posts.edit', [
            'data' => $Employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Employee $Employee)
    {
        $data = $this->updateAction->execute($request->validated());

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $Employee)
    {
        $data = $this->destroyAction->execute();

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }
}
