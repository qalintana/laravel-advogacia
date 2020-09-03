<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateEscritory;
use App\Http\Controllers\Controller;
use App\Models\Escritory;
use Illuminate\Http\Request;

class EscritoryController extends Controller
{
  private $repository;

  public function __construct(Escritory $escritory)
  {
    $this->repository = $escritory;
  }


  public function index()
  {
    $escritories = $this->repository->paginate(15);
    return view('escritories.index', compact('escritories'));
  }


  public function create()
  {
    return view('escritories.create');
  }

  public function store(StoreUpdateEscritory $request)
  {
    if (!$escritory = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('escritory.index');
  }


  public function edit($id)
  {
    if (!$escritory = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('escritories.edit', compact('escritory'));
  }


  public function show($id)
  {
    if (!$escritory = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('escritories.show', compact('escritory'));
  }


  public function update(StoreUpdateEscritory $request, $id)
  {
    if (!$escritory = $this->repository->find($id)) {
      return redirect()->back();
    }

    $escritory->update($request->all());
    return redirect()->route('escritory.index');
  }

  public function delete($id)
  {
    if (!$escritory = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('escritories.delete', compact('escritory'));
  }


  public function destroy($id)
  {
    if (!$escritory = $this->repository->find($id)) {
      return redirect()->back();
    }
    $escritory->delete();

    return redirect()->route('escritory.index');
  }
}
