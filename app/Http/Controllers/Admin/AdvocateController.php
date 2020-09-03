<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateAdvocate;
use App\Models\Advocate;
use Illuminate\Http\Request;

class AdvocateController extends Controller
{
  //

  private $repository;


  public function __construct(Advocate $advocate)
  {
    $this->repository = $advocate;
  }


  public function index()
  {
    $advocates = $this->repository->paginate(15);
    return view('advocates.index', compact('advocates'));
  }


  public function create()
  {
    return view('advocates.create');
  }

  public function store(StoreUpdateAdvocate $request)
  {
    if (!$advocate = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('advocate.index');
  }


  public function edit($id)
  {
    if (!$advocate = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('advocates.edit', compact('advocate'));
  }


  public function show($id)
  {
    if (!$advocate = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('advocates.show', compact('advocate'));
  }


  public function update(StoreUpdateAdvocate $request, $id)
  {
    if (!$advocate = $this->repository->find($id)) {
      return redirect()->back();
    }

    $advocate->update($request->all());
    return redirect()->route('advocate.index');
  }

  public function delete($id)
  {
    if (!$advocate = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('advocates.delete', compact('advocate'));
  }


  public function destroy($id)
  {
    if (!$advocate = $this->repository->find($id)) {
      return redirect()->back();
    }
    $advocate->delete();

    return redirect()->route('advocate.index');
  }
}
