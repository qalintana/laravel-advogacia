@extends('adminlte::page')

@section('titlw', 'escritorios')

@section('content_header')
<ol class="breadcrumb">
  <li class="breadcrumb-item"> <a href="{{ route('escritory.create')}}">Dashboard </a></li>
  &nbsp;&nbsp;
  <i class="fas fa-arrow-right mt-2 text-blue"></i>
  &nbsp;&nbsp;
  <li class="breadcrumb-tem"> <a href="{{ route('escritory.index')}}"> escritorios</a></li>
</ol>

<div class="card text-white" style="background: #232632">
  <div class="card-body col-md-12 text-center">
    <h3>Detalhes do escritorio {{ $escritory->nome }}</h3>
  </div>
</div>

@endsection

@section('content')

<div class="row">
  <div class="col-md-12" style="margin-top: -25px">
    <div class="card card-blue">
      <div class="row">
        <div class="card-body">

          {{-- form create escritory --}}
          <div class="text-center">
            <p> <strong>Nome do escritório: </strong> {{$escritory->nome}}</p>
          </div>

          <p class="text-center">
            <a href="{{ route('escritory.index')}}" class="btn btn-default btn-sm"> <i class="fas fa-list"></i>
              Listagem geral </a>
            <a href="{{ route('escritory.create')}}" class="btn btn-success btn-sm"> <i class="fas fa-plus-circle"></i>
              Cadastrar </a>
            <a href="{{ route('escritory.edit', $escritory->id)}}" class="btn btn-primary btn-sm"> <i
                class="fas fa-edit"></i>
              Editar </a>
            <a href="{{ route('escritory.delete', $escritory->id)}}" class="btn btn-danger btn-sm"> <i
                class="fas fa-trash"></i>Eliminar </a>
            {{-- End form create escritory --}}
          </p>

        </div>
      </div>
      <!-- /.modal-content -->
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
