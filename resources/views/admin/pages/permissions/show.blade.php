@extends('adminlte::page')

@section('title', "Detalhes da permissão {$permission->name}")

@section('content_header')
<h1>Detalhes da permissão <strong> {{$permission->name}}</strong></h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <ul>
            <li>
                <strong>Nome:</strong>{{ $permission->name}}
            </li>

            <li>
                <strong>Descrição:</strong> {{ $permission->description }}
            </li>
        </ul>

        @include('admin.includes.alerts')

        <form action="{{ route('permissions.destroy', $permission->id)}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">
                Eliminar a permissão {{ $permission->name }}
            </button>
        </form>
    </div>

</div>

@endsection
