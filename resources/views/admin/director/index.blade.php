@extends('admin.layouts.main')
@section('title', 'Directores')

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
                <div class="card-title">Listado de directores</div>
                <a href="{{ route('director.create') }}" class="btn btn-primary">Nuevo director</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Director</th>
                        <th style="width: 200px">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($directores as $director)
                        <tr>
                            <td>{{ $director->id }}</td>
                            <td>{{ $director->nombre }}</td>
                            <td>
                                <a href="{{ route('director.edit', $director->id) }}" class="btn btn-sm btn-primary"
                                    title="Editar">
                                    Editar
                                </a>
                                <form action="{{ route('director.destroy', $director->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger btn-eliminar">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $directores->links('pagination::bootstrap-5') }}
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
