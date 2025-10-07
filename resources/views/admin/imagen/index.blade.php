@extends('admin.layouts.main')
@section('title', 'Imagenes')

@section('styles')
    <style>
        .pagination .page-link {
            border-radius: 0 !important;
        }
    </style>
@endsection

@section('content')
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class=" d-flex justify-content-between align-items-center">
                <div class="card-title">Listado de imagenes</div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($imagenes as $imagen)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="/imagenes/pelicula/{{ $imagen->nombre }}" class="img-responsive" alt="">
                            </div>
                            <div class="panel-footer">
                                {{ $imagen->pelicula->titulo }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $imagenes->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
