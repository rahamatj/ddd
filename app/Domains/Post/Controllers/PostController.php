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
use App\Domains\Post\Responders\Contracts\ResponderInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected string $switch;

    public function __construct(
        protected IndexAction $indexAction,
        protected CreateAction $createAction,
        protected ReadAction $readAction,
        protected UpdateAction $updateAction,
        protected DeleteAction $deleteAction,
    ) {
        $this->switch = config('ddd.response');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ResponderInterface $responder)
    {
        $data = $this->indexAction->execute();

        return $responder->respond($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
    public function update(Request $request, string $id)
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
