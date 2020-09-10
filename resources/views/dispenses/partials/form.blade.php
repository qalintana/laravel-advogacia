<div class="row">
  <div class="col-md-10">
    @csrf
    <div class="row">

      <div class="col-md-12">
        <div class="input-field  col">
          <select name="process_id" class="form-control">
            <option value="">Selecione o processo relacionado a esta despesa</option>
            @foreach ($processes as $process)
            <option value=" {{$process->id}}">{{ $process->valor }}</option>
            @endforeach
          </select>
          @error('process_id')
          <p class="text-danger">Selecione um processo válido</p>
          @enderror
        </div>
      </div>

      <div class="col-md-12">
        <div class="input-field  col">
          <select name="font_id" class="form-control">
            <option value="">Selecione o processo relacionado a esta despesa</option>
            @foreach ($fonts as $font)
            <option value=" {{$font->id}}">{{ $font->nome }}</option>
            @endforeach
          </select>
          @error('font_id')
          <p class="text-danger">Selecione um processo válido</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="data" type="text" class="validate" name="data" value="{{$action->data ??  old('data') }}">
          <label for="data">Data</label>
          @error('data')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field  col">
          <input id="valor" type="text" class="validate" name="valor" value="{{$action->valor ??  old('valor') }}">
          <label for="valor">Valor</label>

          @error('valor')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>

    </div>

    <div class="col-md-2">
      <div class="card-footer text-center">
        <button type="submit" class="btn btn-outline-primary">
          @if (isset($action))
          <i class='fas fa-user-edit'> </i>Atualizar
          @else
          <i class='fas fa-save'> </i> Cadastrar
          @endif
        </button>
        <hr>
        <div class="card">
          <a href="{{ route('action.index')}}" class="text-center"> Ver
            Listagem
            geral</a>
        </div>


        @isset($action)
        <a href="{{ route('action.delete', $action->id)}}" class="btn btn-danger btn-sm"> <i
            class="fas fa-trash"></i>Eliminar</a>
        @endisset
      </div>

    </div>
  </div>
