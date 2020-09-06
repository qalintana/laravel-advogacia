@extends('adminlte::page')

@section('title', 'Processos')

@section('content_header')
<ol class="breadcrumb">
  <li class="breadcrumb-item"> <a href="{{ route('process.create')}}">Dashboard </a></li>
  &nbsp;&nbsp;
  <i class="fas fa-arrow-right mt-2 text-blue"></i>
  &nbsp;&nbsp;
  <li class="breadcrumb-tem"> <a href="{{ route('process.index')}}"> Processos</a></li>
</ol>

<div class="card text-white" style="background: #232632">
  <div class="card-body col-md-12">
    <h3>Editar Processo {{$process->nome}}</h3>
  </div>
</div>
@endsection

@section('content')

<div class="row">
  <div class="col-md-12" style="margin-top: -25px">
    <div class="card card-blue">
      <div class="row">

        <div class="card-body">
          {{-- form create process --}}

          <form action="{{ route('process.update', $process->id)}}" method="POST">
            @method('PUT')
            @include('processes.partials.form')
          </form>

          {{-- End form create process --}}
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
