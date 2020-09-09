<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProcess;
use App\Models\Client;
use App\Models\Escritory;
use App\Models\State;
use App\Models\Process;
use App\Models\Type;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
  //

  private $repository, $escritory, $type, $client, $state;

  public function __construct(Process $process, Client $client, Escritory $escritory, Type $type, State $state)
  {
    $this->repository = $process;
    $this->client = $client;
    $this->escritory = $escritory;
    $this->type = $type;
    $this->state = $state;
  }


  public function index()
  {
    $processes = $this->repository->paginate(15);
    return view('processes.index', compact('processes'));
  }


  public function create()
  {
    $escritories = $this->escritory->all();
    $types = $this->type->all();
    $clients = $this->client->all();
    $states = $this->state->all();
    return view('processes.create', compact('clients', 'escritories', 'types', 'states'));
  }

  public function store(StoreUpdateProcess $request)
  {

    if (!$process = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('process.index');
  }




  public function show($id)
  {
    if (!$process = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('processes.show', compact('process'));
  }

  public function edit($id)
  {

    if (!$process = $this->repository->find($id)) {
      return redirect()->back();
    }
    $escritories = $this->escritory->all();
    $types = $this->type->all();
    $clients = $this->client->all();
    $states = $this->state->all();

    return view('processes.edit', compact('process', 'clients', 'types', 'escritories', 'states'));
  }


  public function update(StoreUpdateProcess $request, $id)
  {
    if (!$process = $this->repository->find($id)) {
      return redirect()->back();
    }

    $process->update($request->all());
    return redirect()->route('process.index');
  }

  public function delete($id)
  {
    if (!$process = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('processes.delete', compact('process'));
  }


  public function destroy($id)
  {
    if (!$process = $this->repository->find($id)) {
      return redirect()->back();
    }
    $process->delete();

    return redirect()->route('process.index');
  }
}
