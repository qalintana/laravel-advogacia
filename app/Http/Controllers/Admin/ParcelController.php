<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateParcel;
use App\Models\Parcel;
use App\Models\Avence;
use Illuminate\Http\Request;

class ParcelController extends Controller
{

  private $repository, $avence;

  public function __construct(Parcel $parcel, Avence $avence)
  {
    $this->repository = $parcel;
    $this->avence = $avence;
  }


  public function index()
  {
    $parcels = $this->repository->paginate(15);
    return view('parcels.index', compact('parcels'));
  }


  public function create()
  {
    $avences = $this->avence->all(['id', 'valor_mensal']);
    return view('parcels.create', compact('avences'));
  }

  public function store(StoreUpdateParcel $request)
  {
    if (!$parcel = $this->repository->create($request->all())) {
      return redirect()->back();
    }
    return redirect()->route('parcel.index');
  }


  public function edit($id)
  {
    $avences = $this->avence->all(['id', 'valor_mensal']);

    if (!$parcel = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('parcels.edit', compact('parcel', 'avences'));
  }


  public function show($id)
  {
    if (!$parcel = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('parcels.show', compact('parcel'));
  }


  public function update(StoreUpdateParcel $request, $id)
  {
    if (!$parcel = $this->repository->find($id)) {
      return redirect()->back();
    }

    $parcel->update($request->all());
    return redirect()->route('parcel.index');
  }

  public function delete($id)
  {
    if (!$parcel = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('parcels.delete', compact('parcel'));
  }


  public function destroy($id)
  {
    if (!$parcel = $this->repository->find($id)) {
      return redirect()->back();
    }
    $parcel->delete();

    return redirect()->route('parcel.index');
  }
}
