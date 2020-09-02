<div class="row">
  <div class="col-md-10">
    @csrf
    <div class="row">
      <div class="col-md-12">
        <div class="input-field  col">
          <input id="nome" type="text" class="validate" name="nome" value="{{$client->nome ??  old('nome') }}">
          <label for="nome">Nome Completo</label>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-field col">
          <input id="apelido" type="text" class="validate" name="apelido" value="{{$client->apelido ??
                  old('apelido') }}">
          <label for="apelido">Apelido</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field col">
          <input id="nif" type="text" class="validate" name="nif" value="{{ $client->nif ??old('nif') }}">
          <label for=" nif">NIF</label>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-field  col">
          <input id="email" type="email" class="validate" name="email" value={{ $client->email ?? old('email') }}>
          <label for="email">Email</label>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-field col ">
          <input id="morada" type="text" class="validate" name="morada" value="{{$client->morada ?? old('morada') }}">
          <label for="morada">Morada</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field col ">
          <input id="concelho" type="text" class="validate" name="concelho"
            value="{{$client->concelho ??  old('concelho') }}">
          <label for="concelho">Concelho</label>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-field col ">
          <input id="postal" type="text" class="validate" name="postal" value="{{ $client->postal ?? old('postal') }}">
          <label for="postal">Postal</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-field col ">
          <input id="fraquesia" type="text" class="validate" name="fraguesia"
            value={{ $client->fraguesia ?? old('fraguesia') }}>
          <label for="fraguesia">Fraguesia</label>
          @error('fraguesia')
          <p>{{$message}}</p>
          @enderror
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="input-field col">
          <input id="contacto1" type="text" class="validate" name="contacto1"
            value={{ $client->contacto1 ?? old('contacto1') }}>
          <label for="contacto1">Contacto 1</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-field col">
          <input id="contacto2" type="text" class="validate" name="contacto2"
            value={{ $client->contacto2 ?? old('contacto2') }}>
          <label for="contacto2">Contacto 2</label>
        </div>
      </div>
    </div>

  </div>

  <div class="col-md-2">
    <div class="card-footer text-center">
      <button type="submit" class="btn btn-outline-primary">
        <i class="fas fa-user">
        </i>&nbsp; Salvar
      </button>
    </div>

    <a href="{{ route('client.index')}}" class="info info-box  text-center"> <i class="fas fa-list mt-1"></i> &nbsp;
      &nbsp; Ver
      Listagem
      geral</a>

  </div>
</div>
