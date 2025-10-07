@extends('admin.layouts.main')

@section('title', 'Editar Pelicula')

@section('content')
    @include('admin.layouts.errors')
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Completar el formulario para editar pelicula</div>
        </div>
        <form action="{{ route('pelicula.update', $pelicula->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label for="titulo" class="form-label @error('titulo') is-invalid @enderror">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo"
                        placeholder="Ingrese el titulo de la pelicula" value="{{ old('titulo', $pelicula->titulo) }}"
                        required>
                    @error('titulo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="genero_id" class="form-label @error('genero_id') is-invalid @enderror">Genero</label>
                    <select name="genero_id" class="form-select" id="genero_id" required>
                        <option value="" disabled selected hidden>Seleccione una opción</option>
                        @foreach ($generos as $genero)
                            {{-- Pasar el id del genero seleccionado --}}
                            <option value="{{ $genero->id }}" @selected(old('genero_id', $pelicula->genero_id) == $genero->id)>
                                {{ $genero->genero }}
                            </option>
                        @endforeach
                    </select>
                    @error('genero_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="costo" class="form-label @error('costo') is-invalid @enderror">Costo</label>
                    <input type="number" class="form-control" id="costo" name="costo"
                        value="{{ old('costo', $pelicula->costo) }}" placeholder="Ingrese el costo de la pelicula" required>
                    @error('costo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="estreno" class="form-label @error('estreno') is-invalid @enderror">Estreno</label>
                    <input type="text" class="form-control date-picker" id="estreno" name="estreno"
                        value="{{ old('estreno', $pelicula->estreno) }}" placeholder="Ingrese el estreno de la pelicula"
                        required />
                    @error('estreno')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="resumen" class="form-label @error('resumen') is-invalid @enderror">Resumen</label>
                    <textarea class="form-control tinymce-editor" id="resumen" name="resumen" style="height: 150px;"
                        placeholder="Ingrese el resumen de la pelicula" required>
                        {{ old('resumen', $pelicula->resumen) }}
                    </textarea>
                    @error('resumen')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="directores" class="form-label @error('directores') is-invalid @enderror">Directores</label>
                    <select name="directores[]" class="form-select tom-select" id="directores" multiple required>
                        <option value="" disabled selected hidden>Seleccione una opción</option>
                        @foreach ($directores as $director)
                            {{-- Pasar un array con los ids de director seleccionados --}}
                            <option value="{{ $director->id }}" @selected(in_array($director->id, old('directores', $mis_directores)))>
                                {{ $director->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('directores')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- No permitir editar la imagen eliminar este campo --}}
                {{-- Esta accion se la podria crear en un CRUD para imagenes --}}
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
                <a href="{{ route('pelicula.index') }}" class="btn float-end">
                    <i class="fa fa-times" aria-hidden="true"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    @vite(['resources/js/tomselect.js', 'resources/js/tinymce.js', 'resources/js/flatpickr.js'])
@endsection
