@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"> <a href="{{ route('admin.index')}}">Dashboard</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('permissions.index')}}">Permissões</a></li>
</ol>

<h1>Permissões <a href="{{ route('permissions.create')}}" class="btn btn-dark btn-sm">Add <i class="fa fa-plus"></i></a>
</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <form action="{{ route('permissions.search')}}" method="POST" class="form form-inline">
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

                @foreach ($permissions as $permission)
                <tr>
                    <td>
                        {{$permission->name}}
                    </td>

                    <td>
                        <a href="{{route('permissions.edit',$permission->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('permissions.show',$permission->id)}}" class="btn btn-info">Ver</a>
                        <a href="{{route('permissions.profiles',$permission->id)}}" class="btn btn-warning"><i
                                class="fas fa-lock"></i> </a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="card-footer align-self-center bg-white">
        @if (isset($filters))
        {!! $permissions->appends($filters)->links() !!}
        @else
        {!! $permissions->links() !!}
        @endif
    </div>
</div>

@endsection
