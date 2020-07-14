@extends('adminlte::page')

@section('title', "Perfis da permissão {$permission->name}")

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"> <a href="{{ route('admin.index')}}">Dashboard</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('permissions.index')}}">Perfis</a></li>
</ol>

<h1>Perfis da permissão <strong> {{ $permission->name }}
</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        @include('admin.includes.alerts')

        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th style="width: 20%">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($profiles as $profile)
                <tr>
                    <td>
                        {{$profile->name}}
                    </td>

                    <td>
                        <a href="{{route('profiles.permission.detach',[$profile->id, $permission->id])}}"
                            class="btn btn-danger"> <i class="fas fa-trash"></i> Desvincular </a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="card-footer align-self-center bg-white">
        @if (isset($filters))
        {!! $profiles->appends($filters)->links() !!}
        @else
        {!! $profiles->links() !!}
        @endif
    </div>
</div>

@endsection
