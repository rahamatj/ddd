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

use App\Domains\Post\Responders\Contracts\IndexAPIResponderInterface;

class PostController extends Controller
{
    protected $switch;

    public function __construct(
        protected IndexAction $indexAction,
        protected CreateAction $createAction,
        protected ReadAction $readAction,
        protected UpdateAction $updateAction,
        protected DeleteAction $deleteAction,
    ) {
        $this->switch = config('ddd.response');
    }



    public function index(IndexAPIResponderInterface $responder)
    {
        $data = $this->indexAction->execute();

        return $responder->respond($data);
    }

    public function store(StoreRequest $request)
    {
        return $this->createAction->execute($request->validated());
    }

    public function show($id)
    {
        return $this->readAction->execute($id);
    }

    public function update(UpdateRequest $request, $id)
    {
        return $this->updateAction->execute($id, $request->validated());
    }

    public function destroy($id)
    {
        return $this->deleteAction->execute($id);
    }
}