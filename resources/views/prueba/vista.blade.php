@extends('admin.layouts.main')
{{-- Si se omite la siguiente linea,--}}
{{-- toma el valor por defecto que se indica en main.blade.php --}}
@section('title', 'Hola blade')
@section('content')
    <h2>Hola desde una plantilla blade</h2>
@endsection