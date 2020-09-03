<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Http\Requests\StoreUpdateType;

use Illuminate\Http\Request;

class TypeController extends Controller
{
  //

  private $repository;

  public function __construct(Type $type)
  {
    $this->repository = $type;
  }


  public function index()
  {
    $types = $this->repository->paginate(15);
    return view('types.index', compact('types'));
  }


  public function create()
  {
    return view('types.create');
  }

  public function store(StoreUpdateType $request)
  {
    if (!$type = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('type.index');
  }


  public function edit($id)
  {
    if (!$type = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('types.edit', compact('type'));
  }


  public function show($id)
  {
    if (!$type = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('types.show', compact('type'));
  }


  public function update(StoreUpdateType $request, $id)
  {
    if (!$type = $this->repository->find($id)) {
      return redirect()->back();
    }

    $type->update($request->all());
    return redirect()->route('type.index');
  }

  public function delete($id)
  {
    if (!$type = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('types.delete', compact('type'));
  }


  public function destroy($id)
  {
    if (!$type = $this->repository->find($id)) {
      return redirect()->back();
    }
    $type->delete();

    return redirect()->route('type.index');
  }
}
