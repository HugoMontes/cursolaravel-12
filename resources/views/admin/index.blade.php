@extends('admin.layouts.main') 
@section('title', 'Escritorio') 
@section('content')
    {{-- Llamando por la url --}}
    <a href="{{ url('hola') }}">1. Hola mundo (por url)</a><br />
    {{-- Llamando por la url --}}
    <a href="{{ route('practica1') }}">2. Hola mundo (por ruta)</a><br />
    {{-- Se recomienda hacer uso de los nombres de rutas y no de urls --}} 
    <a href="{{ route('practica2', ['nombre'=>'Ana', 'edad'=>45]) }}">
        4. Paso de parámetros </a><br />
    <a href="{{ route('practica3') }}">
        5. Paso de parametros por default </a><br />
    <a href="{{ route('saludo.dia') }}">6. Buenos dias</a><br />
    <a href="{{ route('saludo.tarde') }}">7. Buenas tardes</a><br /> 
    <a href="{{ route('saludo.noche') }}">8. Buenas noches</a><br />
@endsection