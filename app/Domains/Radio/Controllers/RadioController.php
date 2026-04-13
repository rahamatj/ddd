<?php

namespace App\Domains\Radio\Controllers;

use App\Http\Controllers\Controller;
use App\Domains\Radio\Actions\IndexAction;
use App\Domains\Radio\Actions\CreateAction;
use App\Domains\Radio\Actions\StoreAction;
use App\Domains\Radio\Actions\ShowAction;
use App\Domains\Radio\Actions\UpdateAction;
use App\Domains\Radio\Actions\DestroyAction;
use App\Domains\Radio\Requests\StoreRequest;
use App\Domains\Radio\Requests\UpdateRequest;
use App\Domains\Radio\Responders\Responder;
use App\Domains\Radio\Models\Radio;

class RadioController extends Controller
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
    public function show(Radio $Radio)
    {
        return responder()->respond()->withJSON([
            'data' => $Radio
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Radio $Radio)
    {
        return responder()->respond()->withView('posts.edit', [
            'data' => $Radio
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Radio $Radio)
    {
        $data = $this->updateAction->execute($request->validated());

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Radio $Radio)
    {
        $data = $this->destroyAction->execute();

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }
}
