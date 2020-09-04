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
  <li class="breadcrumb-tem text-bold"> <a href="{{ route('client.index')}}"> Registo de novo cliente</a></li>

</ol>

{{-- <div class="card text-white" style="background: #232632">
  <div class="card-body col-md-12">
    <h3>Cadastro de novo Cliente</h3>
  </div>
</div> --}}
@endsection


@section('content')
<div class="row mt-5">
  <div class="col-md-12" style="margin-top: -25px">
    <div class="card card-blue">
      <div class="row">

        <div class="card-body">
          {{-- form create client --}}

          <form action="{{ route('client.store')}}" method="POST">
            @include('clients.partials.form')
          </form>
          {{-- End form create client --}}
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
