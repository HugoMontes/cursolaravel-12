@extends('admin.layouts.main')
@section('title', 'Peliculas')

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
                <div class="card-title">Listado de peliculas</div>
                <a href="{{ route('pelicula.create') }}" class="btn btn-primary">
                    Nueva Pelicula
                </a>
            </div>
        </div>
        <div class="card-body">
            <!-- Buscador -->
            <form action="{{ route('pelicula.index') }}" method="GET">
                <div class="form-group">
                    <div class="input-group">
                        <input name="titulo" type="text" class="form-control" placeholder="Buscar por titulo..."
                            value="{{ old('titulo', $titulo) }}">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <!-- /Buscador -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITULO</th>
                        <th>GENERO</th>
                        <th>USUARIO</th>
                        <th style="width: 200px">ACCION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $pelicula)
                        <tr>
                            <td>{{ $pelicula->id }}</td>
                            <td>{{ $pelicula->titulo }}</td>
                            <td>{{ $pelicula->genero->genero }}</td>
                            <td>{{ $pelicula->user->name }}</td>
                            <td>
                                <form action="{{ route('pelicula.destroy', $pelicula->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger btn-eliminar">
                                        Eliminar
                                    </button>
                                </form>
                                <a href="{{ route('pelicula.edit', $pelicula->id) }}" class="btn btn-sm btn-primary">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $peliculas->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener("click", function(e) {
                if (e.target && e.target.classList.contains('btn-eliminar')) {
                    e.preventDefault();
                    const form = e.target.closest('form');
                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: "¡No podrás revertir esto!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, eliminar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                }
            });
        });
    </script>
@endsection
