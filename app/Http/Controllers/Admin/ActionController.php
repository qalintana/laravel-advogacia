<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateAction;
use App\Models\Action;
use App\Models\Process;
use Illuminate\Http\Request;

class ActionController extends Controller
{

  private $repository, $processes;


  public function __construct(Action $action, Process $process)
  {
    $this->repository = $action;
    $this->processes = $process;
  }


  public function index()
  {
    $actions = $this->repository->paginate(15);
    return view('actions.index', compact('actions'));
  }

  public function create()
  {
    $processes = $this->processes->all();

    return view('actions.create', compact('processes'));
  }

  public function store(StoreUpdateAction $request)
  {
    if (!$action = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('action.index');
  }


  public function edit($id)
  {
    if (!$action = $this->repository->find($id)) {
      return redirect()->back();
    }

    $processes = $this->processes->all();

    return view('actions.edit', compact('action', 'processes'));
  }


  public function show($id)
  {
    if (!$action = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('actions.show', compact('action'));
  }


  public function update(StoreUpdateAction $request, $id)
  {
    if (!$action = $this->repository->find($id)) {
      return redirect()->back();
    }

    $action->update($request->all());
    return redirect()->route('action.index');
  }

  public function delete($id)
  {
    if (!$action = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('actions.delete', compact('action'));
  }


  public function destroy($id)
  {
    if (!$action = $this->repository->find($id)) {
      return redirect()->back();
    }
    $action->delete();

    return redirect()->route('action.index');
  }
}
