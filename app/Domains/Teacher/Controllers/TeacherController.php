<?php

namespace App\Domains\Teacher\Controllers;

use App\Http\Controllers\Controller;
use App\Domains\Teacher\Actions\IndexAction;
use App\Domains\Teacher\Actions\CreateAction;
use App\Domains\Teacher\Actions\StoreAction;
use App\Domains\Teacher\Actions\ShowAction;
use App\Domains\Teacher\Actions\UpdateAction;
use App\Domains\Teacher\Actions\DestroyAction;
use App\Domains\Teacher\Requests\StoreRequest;
use App\Domains\Teacher\Requests\UpdateRequest;
use App\Domains\Teacher\Responders\Responder;
use App\Domains\Teacher\Models\Teacher;

class TeacherController extends Controller
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
    public function show(Teacher $Teacher)
    {
        return responder()->respond()->withJSON([
            'data' => $Teacher
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $Teacher)
    {
        return responder()->respond()->withView('posts.edit', [
            'data' => $Teacher
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Teacher $Teacher)
    {
        $data = $this->updateAction->execute($request->validated());

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $Teacher)
    {
        $data = $this->destroyAction->execute();

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }
}
