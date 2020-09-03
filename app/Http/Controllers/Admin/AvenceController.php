<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateAvence;
use App\Models\Avence;
use App\Models\Client;
use Illuminate\Http\Request;

class AvenceController extends Controller
{

  private $repository, $clients;


  public function __construct(Avence $Avence, Client $client)
  {
    $this->repository = $Avence;
    $this->clients = $client;
  }


  public function index()
  {
    $avences = $this->repository->paginate(15);
    return view('avences.index', compact('avences'));
  }


  public function create()
  {
    $clients = $this->clients->all(['id', 'nome']);

    return view('avences.create', compact('clients'));
  }

  public function store(StoreUpdateAvence $request)
  {
    if (!$Avence = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('avence.index');
  }


  public function edit($id)
  {
    if (!$avence = $this->repository->find($id)) {
      return redirect()->back();
    }

    $clients = $this->clients->all(['id', 'nome']);

    return view('avences.edit', compact('avence', 'clients'));
  }


  public function show($id)
  {
    if (!$avence = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('avences.show', compact('avence'));
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
    return view('avences.delete', compact('avence'));
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
