@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<ol class="breadcrumb">
  <li class="breadcrumb-item"> <a href="{{ route('client.create')}}">Dashboard </a></li>
  &nbsp;&nbsp;
  <i class="fas fa-arrow-right mt-2 text-blue"></i>
  &nbsp;&nbsp;
  <li class="breadcrumb-tem"> <a href="{{ route('client.create')}}"> Cadastrar cliente</a></li>
</ol>

{{-- <div class="card" style="background: #0e06b2">
  <div class="card-body  text-white">
    <h3>Clientes Cadastrados</h3>
  </div>
</div> --}}

@endsection


@section('content')

<div class="row" style="box-shadow: 0 0 25x rgba(0,0,0,.5)">
  <div class="col-12">
    <div class="card">
      <div class="card-header">

        <div class="row">
          <div class="col-md-8 text-left white">
            <a href="{{ route('client.create')}}" class="btn btn-outline-primary"
              {{-- data-toggle="modal" data-target="#modal-default" --}}><i class="fas fa-plus-circle"></i>
              Novo
              cliente</a>
          </div>

          <div class="col-md-2 text-right ml-5">
            <div class="input-group input-group-sm " style="width: 300px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Procurar">

              <div class="input-group-append">
                <button type="submit" class="btn btn-primary btn-sm" style="background:#232632; height: 32px;"><i
                    class=" fas fa-search text-white"></i></button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.card-header -->
      <div class=" card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr class="text-lightblue">
              <th>NIF</th>
              <th>Nome</th>
              <th>Postal</th>
              <th>Email</th>
              <th>Opções</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($clients as $client)
            <tr class="text-gray">
              <td>{{$client->nif}}</td>
              <td>{{$client->nome}}</td>
              <td>{{$client->postal}}</td>
              <td>{{$client->email}}</td>
              <td>
                <a href="{{ route('client.edit', $client->id)}}" class="btn btn-outline-primary btn-sm"> <i
                    class="fas fa-edit"></i> </a>
                <a href="{{ route('client.show', $client->id)}}" class="btn btn-outline-success btn-sm"> <i
                    class="fas fa-eye"></i> </a>
                <a href="{{ route('client.delete', $client->id)}}" class="btn btn-outline-danger btn-sm"> <i
                    class="fas fa-trash"></i> </a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

{{-- modals --}}

{{-- <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true" style="width: 800px">
  @include('clients.partials.form')
  <!-- /.modal-dialog -->
</div> --}}

@stop

@section('css')
<link rel="stylesheet" href="/css/customize.css">
@stop

@section('js')
<script src="/js/materialize.min.js">

</script>
@stop
