@extends('adminlte::page')

@section('title', "Detalhes do Perfil {$profile->name}")

@section('content_header')
<h1>Detalhes do Perfil <strong> {{$profile->name}}</strong></h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <ul>
            <li>
                <strong>Nome:</strong>{{ $profile->name}}
            </li>

            <li>
                <strong>Descrição:</strong> {{ $profile->description }}
            </li>
        </ul>

        @include('admin.includes.alerts')

        <form action="{{ route('profiles.destroy', $profile->id)}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">
                Eliminar o Perfil {{ $profile->name }}
            </button>
        </form>
    </div>

</div>

@endsection
