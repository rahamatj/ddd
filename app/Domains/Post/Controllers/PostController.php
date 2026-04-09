<?php

namespace App\Domains\Post\Controllers;

use App\Http\Controllers\Controller;
use App\Domains\Post\Actions\IndexAction;
use App\Domains\Post\Actions\CreateAction;
use App\Domains\Post\Actions\ReadAction;
use App\Domains\Post\Actions\UpdateAction;
use App\Domains\Post\Actions\DeleteAction;
use App\Domains\Post\Requests\StoreRequest;
use App\Domains\Post\Requests\UpdateRequest;
use App\Domains\Post\Responders\Responder;
use App\Domains\Post\Models\Post;

class PostController extends Controller
{
    public function __construct(
        protected IndexAction $indexAction,
        protected CreateAction $createAction,
        protected ReadAction $readAction,
        protected UpdateAction $updateAction,
        protected DeleteAction $deleteAction,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Responder $responder)
    {
        $data = $this->indexAction->execute();

        return $responder->respond(null, $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Responder $responder)
    {
        return $responder->respond('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $Post, Responder $responder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
