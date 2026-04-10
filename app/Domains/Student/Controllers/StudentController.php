<?php

namespace App\Domains\Student\Controllers;

use App\Http\Controllers\Controller;
use App\Domains\Student\Actions\IndexAction;
use App\Domains\Student\Actions\CreateAction;
use App\Domains\Student\Actions\StoreAction;
use App\Domains\Student\Actions\ShowAction;
use App\Domains\Student\Actions\UpdateAction;
use App\Domains\Student\Actions\DestroyAction;
use App\Domains\Student\Requests\StoreRequest;
use App\Domains\Student\Requests\UpdateRequest;
use App\Domains\Student\Responders\Responder;
use App\Domains\Student\Models\Student;

class StudentController extends Controller
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
    public function show(Student $Student)
    {
        return responder()->respond()->withJSON([
            'data' => $Student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $Student)
    {
        return responder()->respond()->withView('posts.edit', [
            'data' => $Student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Student $Student)
    {
        $data = $this->updateAction->execute($request->validated());

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $Student)
    {
        $data = $this->destroyAction->execute();

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }
}
