<div class="row">
  <div class="col-md-10">
    @csrf
    <div class="row">

      <div class="col-md-12">

        <div class="input-field  col">
          <input type="text" name="client_id" id="client_id" list="clientes" class="form-control">
          <label for="client_id">Cliente</label>
          <datalist id="clientes">
            @foreach ($clients as $client)
            <option value=" {{$client->nome}}/{{$client->id}}">{{ $client->nome }}</option>
            @endforeach
          </datalist>
          @error('client_id')
          <p class="text-danger">Selecione um cliente válido</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">

      </div>

      <div class="col-md-12">
        <div class="row">
          <div class="input-field  col col-md-4">
            <input type="text" name="escritory_id" class="form-control" id="escritory_id" list="escritorios">
            <label id="escritory_id">Escritório</label>
            <datalist id="escritorios">
              @foreach ($escritories as $escritory)
              <option value="{{ $escritory->nome }}/{{$escritory->id}}"></option>
              @endforeach
            </datalist>
            @error('escritory_id')
            <p class="text-danger">Selecione um escritório válido</p>
            @enderror
          </div>

          <div class="input-field  col col-md-4">
            <input type="text" name="type_id" class="form-control" id="tipo" list="tipos">
            <label for="tipo">Tipo de processo</label>

            <datalist id="tipos">
              @foreach ($types as $type)
              <option value="{{$type->nome}}/{{$type->id}}"></option>
              @endforeach
            </datalist>

            @error('type_id')
            <p class="text-danger">Selecione um tipo de processo válido</p>
            @enderror
          </div>

          <div class="input-field  col-md-4">
            <input type="text" name="state_id" class="form-control" id="estado" list="estados">
            <label for="estado">Estado do processo</label>

            <datalist id="estados">
              @foreach ($states as $state)
              <option value="{{$state->nome}}/{{$state->id}}"></option>
              @endforeach
            </datalist>

            @error('state_id')
            <p class="text-danger">Selecione um estado válido</p>
            @enderror
          </div>
        </div>

      </div>

      <div class="col-md-12">

      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="valor" type="text" class="validate" name="valor" value="{{$process->valor ??  old('valor') }}">
          <label for="valor">Valor</label>

          @error('valor')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="valor_alcancado" type="text" class="validate" name="valor_alcancado"
            value="{{$process->valor_alcancado ??  old('valor_alcancado') }}">
          <label for="valor_alcancado">Valor Alcançado</label>

          @error('valor_alcancado')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="contraparte" type="text" class="validate" name="contraparte"
            value="{{$process->contraparte ??  old('contraparte') }}">
          <label for="contraparte">Contraparte</label>

          @error('contraparte')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="data_abertura" type="date" class="validate" name="data_abertura"
            value="{{$process->data_abertura ??  old('data_abertura') }}">
          <label for="data_abertura">Data de abertura</label>

          @error('data_abertura')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-field  col">
          <input id="data_conclusao" type="date" class="validate" name="data_conclusao"
            value="{{$process->data_conclusao ??  old('data_conclusao') }}">
          <label for="data_conclusao">Data de conclusão</label>

          @error('data_conclusao')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="retencao" type="text" class="validate" name="retencao"
            value="{{$process->retencao ??  old('retencao') }}">
          <label for="retencao">Retencao</label>

          @error('retencao')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="desconto" type="number" class="validate" name="desconto"
            value="{{$process->desconto ??  old('desconto') }}">
          <label for="desconto">Desconto</label>

          @error('desconto')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">

          <input id="successfree" type="number" class="validate" name="successfree"
            value="{{$process->successfree ??  old('successfree') }}">
          <label for="successfree">Sucess free</label>

          @error('successfree')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
    </div>

  </div>

  <div class="col-md-2">
    <div class="card-footer text-center">
      <button type="submit" class="btn btn-outline-primary">
        @if (isset($process))
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
      <a href="{{ route('avence.delete', $process->id)}}" class="btn btn-danger btn-sm"> <i
          class="fas fa-trash"></i>Eliminar</a>
      @endisset
    </div>

  </div>
</div>
