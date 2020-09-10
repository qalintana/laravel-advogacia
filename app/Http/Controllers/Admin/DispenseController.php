<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateDispense;
use App\Models\Dispense;
use App\Models\Font;
use App\Models\Process;
use Illuminate\Http\Request;

class DispenseController extends Controller
{

  private $repository, $processes, $font;


  public function __construct(Dispense $dispense, Process $process, Font $font)
  {
    $this->repository = $dispense;
    $this->processes = $process;
    $this->font = $font;
  }


  public function index()
  {
    $dispenses = $this->repository->paginate(15);
    return view('dispenses.index', compact('dispenses'));
  }


  public function create()
  {
    $processes = $this->processes->all();
    $fonts = $this->font->all();

    return view('dispenses.create', compact('processes', 'fonts'));
  }

  public function store(StoreUpdateDispense $request)
  {
    if (!$dispense = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('dispense.index');
  }


  public function edit($id)
  {
    if (!$dispense = $this->repository->find($id)) {
      return redirect()->back();
    }

    $processes = $this->processes->all();
    $fonts = $this->font->all();

    return view('dispenses.edit', compact('dispense', 'processes', 'fonts'));
  }


  public function show($id)
  {
    if (!$dispense = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('dispenses.show', compact('dispense'));
  }


  public function update(StoreUpdateDispense $request, $id)
  {
    if (!$dispense = $this->repository->find($id)) {
      return redirect()->back();
    }

    $dispense->update($request->all());
    return redirect()->route('dispense.index');
  }

  public function delete($id)
  {
    if (!$dispense = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('dispenses.delete', compact('dispense'));
  }


  public function destroy($id)
  {
    if (!$dispense = $this->repository->find($id)) {
      return redirect()->back();
    }
    $dispense->delete();

    return redirect()->route('dispense.index');
  }
}
