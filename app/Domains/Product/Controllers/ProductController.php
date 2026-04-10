<?php

namespace App\Domains\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Domains\Product\Actions\IndexAction;
use App\Domains\Product\Actions\CreateAction;
use App\Domains\Product\Actions\StoreAction;
use App\Domains\Product\Actions\ShowAction;
use App\Domains\Product\Actions\UpdateAction;
use App\Domains\Product\Actions\DestroyAction;
use App\Domains\Product\Requests\StoreRequest;
use App\Domains\Product\Requests\UpdateRequest;
use App\Domains\Product\Responders\Responder;
use App\Domains\Product\Models\Product;

class ProductController extends Controller
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
    public function show(Product $Product)
    {
        return responder()->respond()->withJSON([
            'data' => $Product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        return responder()->respond()->withView('posts.edit', [
            'data' => $Product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Product $Product)
    {
        $data = $this->updateAction->execute($request->validated());

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        $data = $this->destroyAction->execute();

        return responder()->respond()->withJSON([
            'data' => $data
        ]);
    }
}
