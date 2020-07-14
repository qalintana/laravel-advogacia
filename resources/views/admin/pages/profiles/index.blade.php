@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"> <a href="{{ route('admin.index')}}">Dashboard</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('profiles.index')}}">Perfis</a></li>
</ol>

<h1>Perfis <a href="{{ route('profiles.create')}}" class="btn btn-dark btn-sm">Add <i class="fa fa-plus"></i></a></h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <form action="{{ route('profiles.search')}}" method="POST" class="form form-inline">
            @csrf
            <input type="text" name="filter" placeholder="Nome" class="form-control"
                value="{{ $filters['filter'] ?? ''}}">
            <button type="submit" class="btn btn-dark">Filtrar</button>

        </form>
    </div>
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
                        <a href="{{route('profiles.edit',$profile->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('profiles.show',$profile->id)}}" class="btn btn-warning">Ver</a>
                        <a href="{{route('profiles.permissions',$profile->id)}}" class="btn btn-warning"><i
                                class="fas fa-lock"></i></a>
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
