<div class="row">
  <div class="col-md-10">
    @csrf
    <div class="row">
      <div class="col-md-12">
        <div class="input-field  col">


          <input id="nome" type="text" class="validate" name="nome" value="{{$state->nome ??  old('nome') }}">
          <label for="nome">Estado de Processo</label>

          @error('nome')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="card-footer text-center">
      <button state="submit" class="btn btn-outline-primary">
        @if (isset($state))
        <i class='fas fa-user-edit'> </i>Atualizar
        @else
        <i class='fas fa-save'> </i> Cadastrar
        @endif
      </button>
      <hr>
      <div class="card">
        <a href="{{ route('state.index')}}" class="text-center"> Ver
          Listagem
          geral</a>
      </div>


      @isset($state)
      <a href="{{ route('state.delete', $state->id)}}" class="btn btn-danger btn-sm"> <i
          class="fas fa-trash"></i>Eliminar</a>
      @endisset
    </div>

  </div>
</div>
