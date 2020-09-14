<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateClient;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  private $repository;

  public function __construct(Client $client)
  {
    $this->repository = $client;
  }


  public function index()
  {
    $clients = $this->repository->latest()->paginate(15);
    return view('clients.index', compact('clients'));
  }


  public function create()
  {
    return view('clients.create');
  }

  public function store(StoreUpdateClient $request)
  {
    if (!$client = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('client.index');
  }


  public function edit($id)
  {
    if (!$client = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('clients.edit', compact('client'));
  }


  public function show($id)
  {
    if (!$client = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('clients.show', compact('client'));
  }


  public function update(StoreUpdateClient $request, $id)
  {
    if (!$client = $this->repository->find($id)) {
      return redirect()->back();
    }

    $client->update($request->all());
    return redirect()->route('client.index');
  }

  public function delete($id)
  {
    if (!$client = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('clients.delete', compact('client'));
  }


  public function destroy($id)
  {
    if (!$client = $this->repository->find($id)) {
      return redirect()->back();
    }
    $client->delete();

    return redirect()->route('client.index');
  }
}
