<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateFile;
use App\Models\File;
use App\Models\Process;
use Illuminate\Http\Request;

class FileController extends Controller
{

  private $repository, $process;


  public function __construct(File $file, Process $process)
  {
    $this->repository = $file;
    $this->process = $process;
  }


  public function index()
  {
    $files = $this->repository->paginate(15);
    return view('files.index', compact('files'));
  }


  public function create()
  {
    $processes = $this->processes->all();

    return view('files.create', compact('processes'));
  }

  public function store(StoreUpdateFile $request)
  {
    if (!$file = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('file.index');
  }


  public function edit($id)
  {
    if (!$file = $this->repository->find($id)) {
      return redirect()->back();
    }

    $processes = $this->processes->all();

    return view('files.edit', compact('file', 'processes'));
  }


  public function show($id)
  {
    if (!$file = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('files.show', compact('file'));
  }


  public function update(StoreUpdateFile $request, $id)
  {
    if (!$file = $this->repository->find($id)) {
      return redirect()->back();
    }

    $file->update($request->all());
    return redirect()->route('file.index');
  }

  public function delete($id)
  {
    if (!$file = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('files.delete', compact('file'));
  }


  public function destroy($id)
  {
    if (!$file = $this->repository->find($id)) {
      return redirect()->back();
    }
    $file->delete();

    return redirect()->route('file.index');
  }
}
