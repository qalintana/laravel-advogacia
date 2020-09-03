<div class="row">
  <div class="col-md-10">
    @csrf
    <div class="row">

      <div class="col-md-12">
        <div class="input-field  col">
          <select name="client_id" class="form-control">
            <option value="">Selecione o cliente</option>
            @foreach ($clients as $client)
            <option value=" {{$client->id}}">{{ $client->nome }}</option>
            @endforeach
          </select>
          @error('client_id')
          <p class="text-danger">Selecione um cliente válido</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="valor_mensal" type="text" class="validate" name="valor_mensal"
            value="{{$avence->valor_mensal ??  old('valor_mensal') }}">
          <label for="valor_mensal">Valor mensal</label>

          @error('valor_mensal')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="iva" type="text" class="validate" name="iva" value="{{$avence->iva ??  old('iva') }}">
          <label for="iva">Iva</label>

          @error('iva')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="retencao" type="text" class="validate" name="retencao"
            value="{{$avence->retencao ??  old('retencao') }}">
          <label for="retencao">Retencao</label>

          @error('retencao')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="parcelas" type="number" class="validate" name="parcelas"
            value="{{$avence->parcelas ??  old('parcelas') }}">
          <label for="parcelas">Parcelas</label>

          @error('parcelas')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">
        <div class="input-field  col">
          <input id="obs" type="text" class="validate" name="obs" value="{{$avence->obs ??  old('obs') }}">
          <label for="obs">Observação</label>

          @error('obs')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>



    </div>
  </div>



  <div class="col-md-2">
    <div class="card-footer text-center">
      <button type="submit" class="btn btn-outline-primary">
        @if (isset($avence))
        <i class='fas fa-user-edit'> </i>Atualizar
        @else
        <i class='fas fa-save'> </i> Cadastrar
        @endif
      </button>
      <hr>
      <div class="card">
        <a href="{{ route('avence.index')}}" class="text-center"> Ver
          Listagem
          geral</a>
      </div>


      @isset($avence)
      <a href="{{ route('avence.delete', $avence->id)}}" class="btn btn-danger btn-sm"> <i
          class="fas fa-trash"></i>Eliminar</a>
      @endisset
    </div>

  </div>
</div>
