<?php

namespace App\Domains\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Domains\Category\Actions\IndexAction;
use App\Domains\Category\Actions\CreateAction;
use App\Domains\Category\Actions\StoreAction;
use App\Domains\Category\Actions\ShowAction;
use App\Domains\Category\Actions\UpdateAction;
use App\Domains\Category\Actions\DestroyAction;
use App\Domains\Category\Requests\StoreRequest;
use App\Domains\Category\Requests\UpdateRequest;
use App\Domains\Category\Responders\Responder;
use App\Domains\Category\Models\Category;

class CategoryController extends Controller
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
    public function show(Category $Category)
    {
        return responder()->respond()->withJSON([
            'data' => $Category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $Category)
    {
        return responder()->respond()->withView('posts.edit', [
            'data' => $Category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Category $Category)
    {
        $data = $this->updateAction->execute($request->validated());

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $Category)
    {
        $data = $this->destroyAction->execute();

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }
}
