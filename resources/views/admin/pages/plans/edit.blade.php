@extends('adminlte::page')

@section('title', "Editar o plano {$plan->name}")

@section('content_header')
<h1>Editar o plano {{ $plan->name}}</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('plans.update', $plan->url)}}" class="form" method="POST">
            @csrf
            @method('PUT')
            @include('admin.pages.plans.partials.form')
        </form>

    </div>
</div>

@endsection
