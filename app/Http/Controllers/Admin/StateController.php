<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateState;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
  //

  private $repository;

  public function __construct(State $state)
  {
    $this->repository = $state;
  }


  public function index()
  {
    $states = $this->repository->paginate(15);
    return view('states.index', compact('states'));
  }


  public function create()
  {
    return view('states.create');
  }

  public function store(StoreUpdateState $request)
  {
    if (!$state = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('state.index');
  }


  public function edit($id)
  {
    if (!$state = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('states.edit', compact('state'));
  }


  public function show($id)
  {
    if (!$state = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('states.show', compact('state'));
  }


  public function update(StoreUpdateState $request, $id)
  {
    if (!$state = $this->repository->find($id)) {
      return redirect()->back();
    }

    $state->update($request->all());
    return redirect()->route('state.index');
  }

  public function delete($id)
  {
    if (!$state = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('states.delete', compact('state'));
  }


  public function destroy($id)
  {
    if (!$state = $this->repository->find($id)) {
      return redirect()->back();
    }
    $state->delete();

    return redirect()->route('state.index');
  }
}
