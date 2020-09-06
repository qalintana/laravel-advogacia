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

      <div class="col-md-12">
        <div class="input-field  col">
          <select name="escritory_id" class="form-control">
            <option value="">Selecione o escritório</option>
            @foreach ($escritories as $escritory)
            <option value=" {{$escritory->id}}">{{ $escritory->nome }}</option>
            @endforeach
          </select>
          @error('escritory_id')
          <p class="text-danger">Selecione um escritório válido</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">
        <div class="input-field  col">
          <select name="client_id" class="form-control">
            <option value="">Selecione o tipo de processo</option>
            @foreach ($types as $type)
            <option value=" {{$type->id}}">{{ $type->nome }}</option>
            @endforeach
          </select>
          @error('client_id')
          <p class="text-danger">Selecione um tipo de processo válido</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">
        <div class="input-field  col">
          <select name="state_id" class="form-control">
            <option value="">Selecione o estado do processo</option>
            @foreach ($states as $state)
            <option value=" {{$state->id}}">{{ $state->nome }}</option>
            @endforeach
          </select>
          @error('state_id')
          <p class="text-danger">Selecione um estado válido</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="valor" type="text" class="validate" name="valor" value="{{$avence->valor ??  old('valor') }}">
          <label for="valor">Valor</label>

          @error('valor')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="valor_alcancado" type="text" class="validate" name="valor_alcancado"
            value="{{$avence->valor_alcancado ??  old('valor_alcancado') }}">
          <label for="valor_alcancado">Valor Alcançado</label>

          @error('valor_alcancado')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="contraparte" type="text" class="validate" name="contraparte"
            value="{{$avence->contraparte ??  old('contraparte') }}">
          <label for="contraparte">Contraparte</label>

          @error('contraparte')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="data_abertura" type="date" class="validate" name="data_abertura"
            value="{{$avence->data_abertura ??  old('data_abertura') }}">
          <label for="data_abertura">Data de abertura</label>

          @error('data_abertura')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-field  col">
          <input id="data_conclusao" type="date" class="validate" name="data_conclusao"
            value="{{$avence->data_conclusao ??  old('data_conclusao') }}">
          <label for="data_conclusao">Data de conclusão</label>

          @error('data_conclusao')
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
          <input id="desconto" type="number" class="validate" name="desconto"
            value="{{$avence->desconto ??  old('desconto') }}">
          <label for="desconto">Desconto</label>

          @error('desconto')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="sucessfree" type="number" class="validate" name="sucessfree"
            value="{{$avence->sucessfree ??  old('sucessfree') }}">
          <label for="sucessfree">Sucess free</label>

          @error('sucessfree')
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
