<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateFont;
use App\Models\Font;
use Illuminate\Http\Request;

class FontController extends Controller
{
  //

  private $repository;

  public function __construct(Font $font)
  {
    $this->repository = $font;
  }


  public function index()
  {
    $fonts = $this->repository->paginate(15);
    return view('fonts.index', compact('fonts'));
  }


  public function create()
  {
    return view('fonts.create');
  }

  public function store(StoreUpdateFont $request)
  {
    if (!$font = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('font.index');
  }


  public function edit($id)
  {
    if (!$font = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('fonts.edit', compact('font'));
  }


  public function show($id)
  {
    if (!$font = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('fonts.show', compact('font'));
  }


  public function update(StoreUpdateFont $request, $id)
  {
    if (!$font = $this->repository->find($id)) {
      return redirect()->back();
    }

    $font->update($request->all());
    return redirect()->route('font.index');
  }

  public function delete($id)
  {
    if (!$font = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('fonts.delete', compact('font'));
  }


  public function destroy($id)
  {
    if (!$font = $this->repository->find($id)) {
      return redirect()->back();
    }
    $font->delete();

    return redirect()->route('font.index');
  }
}
