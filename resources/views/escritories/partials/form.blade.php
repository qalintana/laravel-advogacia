<div class="row">
  <div class="col-md-10">
    @csrf
    <div class="row">
      <div class="col-md-12">
        <div class="input-field  col">
          <input id="nome" type="text" class="validate" name="nome" value="{{$escritory->nome ??  old('nome') }}">
          <label for="nome">Nome do escritório</label>

          @error('nome')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
    </div>
  </div>



  <div class="col-md-2">
    <div class="card-footer text-center">
      <button type="submit" class="btn btn-outline-primary">
        @if (isset($escritory))
        <i class='fas fa-user-edit'> </i>Atualizar
        @else
        <i class='fas fa-save'> </i> Cadastrar
        @endif
      </button>
      <hr>
      <div class="card">
        <a href="{{ route('escritory.index')}}" class="text-center"> Ver
          Listagem
          geral</a>
      </div>


      @isset($escritory)
      <a href="{{ route('escritory.delete', $escritory->id)}}" class="btn btn-danger btn-sm"> <i
          class="fas fa-trash"></i>Eliminar</a>
      @endisset
    </div>

  </div>
</div>
