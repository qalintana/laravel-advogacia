@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<ol class="breadcrumb">
  <li class="breadcrumb-item"> <a href="{{ route('client.create')}}">Dashboard </a></li>
  &nbsp;&nbsp;
  <i class="fas fa-arrow-right mt-2 text-blue"></i>
  &nbsp;&nbsp;
  <li class="breadcrumb-tem"> <a href="{{ route('client.index')}}"> Clientes</a></li>
  &nbsp;&nbsp;
  <i class="fas fa-arrow-right mt-2 text-blue"></i>
  &nbsp;&nbsp;
  <li class="breadcrumb-tem text-bold"> <a href="{{ route('client.index')}}">
      {{ $client->nome}}</a></li>
</ol>

{{-- <div class="card text-white" style="background: #232632">
  <div class="card-body col-md-12 text-center">
    <h3>Detalhes do cliente {{ $client->nome }}</h3>
</div>
</div> --}}

@endsection

@section('content')

<div class="row mt-5">
  <div class="col-md-12" style="margin-top: -25px">
    <div class="card card-blue">
      <div class="row">
        <div class="card-body">

          <div class="row">
            <div class="col-md-6">
              <h4 class="text-primary">Dados Pessoais</h4>
              <hr>
              <p> <strong>Nome Completo: </strong> {{$client->nome}}</p>
              <p> <strong>Apelido: </strong> {{$client->apelido}}</p>
              <p> <strong>E-mail: </strong> <i class="fas fa-mail-forward"></i> {{$client->email}}</p>
              <p> <strong>NIF: </strong> {{$client->nif}}</p>
              <p> <strong>Fraguesia: </strong> {{$client->fraguesia}}</p>
              <p> <strong>Concelho: </strong> {{$client->concelho}}</p>
              <p class="text-blue"> <strong class="text-dark">Contactos : </strong>
                &nbsp;
                &nbsp;<i class='fas fa-phone-alt'></i>&nbsp;{{$client->contacto1}}
                {!! $client->contacto2 ? "&nbsp;&nbsp;<strong class='text-blue'> <i
                    class='fas fa-phone-alt'></i></strong>
                &nbsp;".$client->contacto2 : '' !!}
              </p>
            </div>


          </div>
          {{-- form create client --}}

          {{--
          <p class="text-center">
            <a href="{{ route('client.index')}}" class="btn btn-default btn-sm"> <i class="fas fa-list"></i>
          Listagem geral </a>
          <a href="{{ route('client.create')}}" class="btn btn-success btn-sm"> <i class="fas fa-plus-circle"></i>
            Cadastrar </a>
          <a href="{{ route('client.edit', $client->id)}}" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i>
            Editar </a>
          <a href="{{ route('client.delete', $client->id)}}" class="btn btn-danger btn-sm"> <i
              class="fas fa-trash"></i>Eliminar </a>
          {{-- End form create client --}}
          {{-- </p> --}}
        </div>


      </div>
      <!-- /.modal-content -->
    </div>


    <div class="card">
      <div class="col-md-12">
        <h4 class="text-primary">Histórico</h4>
        <table class="table table-bordered table-striped">
          <thead class="table-info">
            <th>Processo </th>
            <th>Estado </th>
            <th>Escritório </th>
          </thead>
          <tbody>
            @foreach ($client->processes as $process)
            <tr>
              <td>
                <a href="{{ route('process.show', $process->id)}}">
                  {{$process->id < 10 ? '00'.$process->id : $process->id }}
                </a>
              </td>
              <td>
                <a href="{{ route('process.show', $process->id)}}">
                  {{$process->state->nome}}
                </a>
              </td>

              <td>
                <a href="{{ route('process.show', $process->id)}}">
                  {{$process->escritory->nome ?? 'EM ANÁLISE'}}
                </a>

              </td>


            </tr>

            <hr>
            @endforeach
          </tbody>

        </table>


      </div>
    </div>

  </div>


</div>

{{-- modals --}}

{{-- <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true" style="width: 800px">

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
