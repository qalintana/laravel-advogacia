<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

  public function store(StoreUpdateAvence $request)
  {
    if (!$action = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('avence.index');
  }


  public function edit($id)
  {
    if (!$avence = $this->repository->find($id)) {
      return redirect()->back();
    }

    $processes = $this->processes->all(['id', 'nome']);

    return view('actions.edit', compact('avence', 'processes'));
  }


  public function show($id)
  {
    if (!$avence = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('actions.show', compact('avence'));
  }


  public function update(StoreUpdateAvence $request, $id)
  {
    if (!$avence = $this->repository->find($id)) {
      return redirect()->back();
    }

    $avence->update($request->all());
    return redirect()->route('avence.index');
  }

  public function delete($id)
  {
    if (!$avence = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('actions.delete', compact('avence'));
  }


  public function destroy($id)
  {
    if (!$avence = $this->repository->find($id)) {
      return redirect()->back();
    }
    $avence->delete();

    return redirect()->route('avence.index');
  }
}
