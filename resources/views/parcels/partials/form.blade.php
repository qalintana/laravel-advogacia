<div class="row">
  <div class="col-md-10">
    @csrf
    <div class="row">
      <div class="col-md-12">
        <div class="input-field  col">
          <select name="avence_id" class="form-control">
            <option value="">Selecione a avença</option>
            @foreach ($avences as $avence)
            <option value=" {{$avence->id}}">{{ $avence->valor_mensal }}</option>
            @endforeach
          </select>
          @error('avence_id')
          <p class="text-danger">Selecione a avença válida</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">
        <div class="input-field  col">
          <input id="parcela" type="text" class="validate" name="parcela"
            value="{{$parcel->parcela ??  old('parcela') }}">
          <label for="parcela">Parcela</label>

          @error('parcela')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">
        <div class="input-field  col">
          <input id="valor" type="text" class="validate" name="valor" value="{{$parcel->valor ??  old('valor') }}">
          <label for="valor">Valor</label>

          @error('valor')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">
        <div class="input-field  col">
          <input id="desconto" type="text" class="validate" name="desconto"
            value="{{$parcel->desconto ??  old('desconto') }}">
          <label for="desconto">Desconto</label>

          @error('desconto')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">
        <div class="input-field  col">
          <input id="data_vencimento" type="date" class="validate" name="data_vencimento"
            value="{{$parcel->data_vencimento ??  old('data_vencimento') }}">
          <label for="data_vencimento">Data vencimento</label>

          @error('data_vencimento')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">
        <div class="input-field  col">
          <input id="data_pagamento" type="date" class="validate" name="data_pagamento"
            value="{{$parcel->data_pagamento ??  old('data_pagamento') }}">
          <label for="data_pagamento">Data Pagamento</label>

          @error('data_pagamento')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
    </div>
  </div>


</div>



<div class="col-md-2">
  <div class="card-footer text-center">
    <button type="submit" class="btn btn-outline-primary">
      @if (isset($advocate))
      <i class='fas fa-user-edit'> </i>Atualizar
      @else
      <i class='fas fa-save'> </i> Cadastrar
      @endif
    </button>
    <hr>
    <div class="card">
      <a href="{{ route('advocate.index')}}" class="text-center"> Ver
        Listagem
        geral</a>
    </div>


    @isset($advocate)
    <a href="{{ route('advocate.delete', $advocate->id)}}" class="btn btn-danger btn-sm"> <i
        class="fas fa-trash"></i>Eliminar</a>
    @endisset
  </div>

</div>
</div>
