@extends('admin.layouts.main')
@section('title', 'Usuarios')

@section('content')
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class=" d-flex justify-content-between align-items-center">
                <div class="card-title">Listado de peliculas</div>
                <a href="{{ route('pelicula.create') }}" class="btn btn-primary">Nueva Pelicula</a>
            </div>
        </div>

        <div class="card-body">

        </div>
    </div>
@endsection
