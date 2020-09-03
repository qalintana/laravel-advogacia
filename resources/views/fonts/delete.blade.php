@extends('adminlte::page')

@section('title', 'Fontes de despesa')

@section('content_header')
<ol class="breadcrumb">
  <li class="breadcrumb-item"> <a href="{{ route('font.create')}}">Dashboard </a></li>
  &nbsp;&nbsp;
  <i class="fas fa-arrow-right mt-2 text-blue"></i>
  &nbsp;&nbsp;
  <li class="breadcrumb-tem"> <a href="{{ route('font.index')}}"> Fonte de despesa</a></li>
</ol>

<div class="card text-white" style="background: #232632">
  <div class="card-body col-md-12 text-center">
    <h3>Deletar Tipo de fonte de despesa</h3>
  </div>
</div>
@endsection

@section('content')

<div class="row">
  <div class="col-md-12" style="margin-top: -25px">
    <div class="card card-blue">
      <div class="row">
        <div class="card-body">
          {{-- form create font --}}
          <form action="{{route('font.destroy', $font->id)}}" method="POST">
            <h2 class=" text-center">Tem certeza que deseja eliminar a fonte {{ $font->nome }}
            </h2>
            <hr>
            @method('DELETE')
            @csrf
            <div class="row justify-content-center flex-row">
              <button font="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Sim </button>
              &nbsp;
              <a href="{{ route('font.index')}}" class="btn btn-primary btn-sm"> <i class="fas fa-not-equal"></i>
                Não </a>
              &nbsp;
              <a href="{{ route('font.show', $font->id)}}" class="btn btn-info btn-sm"> <i class="fas details"></i>
                Ver detalhes </a>
            </div>
          </form>

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
