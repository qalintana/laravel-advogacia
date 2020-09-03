@extends('adminlte::page')

@section('title', 'Estados')

@section('content_header')
<ol class="breadcrumb">
  <li class="breadcrumb-item"> <a href="{{ route('state.create')}}">Dashboard </a></li>
  &nbsp;&nbsp;
  <i class="fas fa-arrow-right mt-2 text-blue"></i>
  &nbsp;&nbsp;
  <li class="breadcrumb-tem"> <a href="{{ route('state.create')}}"> Cadastrar Estado de processo</a></li>
</ol>

<div class="card" style="background: #232632">
  <div class="card-body  text-white">
    <h3>Estados de Processo Cadastrados</h3>
  </div>
</div>

@endsection


@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">

        <div class="row">
          <div class="col-md-8 text-left white">
            <a href="{{ route('state.create')}}" class="btn btn-primary"
              {{-- data-toggle="modal" data-target="#modal-default" --}}><i class="fas fa-plus-circle text-white"></i>
              Novo
              Estado de processo</a>
          </div>

          <div class="col-md-2 text-right ml-5">
            <div class="input-group input-group-sm " style="width: 300px;">
              <input state="text" name="table_search" class="form-control float-right" placeholder="Procurar">

              <div class="input-group-append">
                <button state="submit" class="btn btn-primary btn-sm" style="background:#232632; height: 32px;"><i
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
            <tr>
              <th>#</th>
              <th>Estado de Processo</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($states as $state)
            <tr>
              <td></td>
              <td>{{$state->nome}}</td>
              <td>
                <a href="{{ route('state.edit', $state->id)}}" class="btn btn-primary btn-sm"> <i
                    class="fas fa-edit"></i>
                </a>
                <a href="{{ route('state.show', $state->id)}}" class="btn btn-success btn-sm"> <i
                    class="fas fa-eye"></i>
                </a>
                <a href="{{ route('state.delete', $state->id)}}" class="btn btn-danger btn-sm"> <i
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
  @include('escritories.partials.form')
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
