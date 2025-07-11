<h1>Componentes y Directivas Blade</h1>
{{-- Comentario blade --}}

<h2>Imprimir valores</h2>
<?php
$nombre = 'Juan';
$edad = 12;
?>
<p>Nombre: {{ $nombre }}</p>
<p>Edad: {{ $edad }}</p>
<p>Email: {{ $email ?? 'default@email.com' }}</p>
<p>Suma: {{ 3 + 4 }}</p>

<h2>Condicional IF</h2>
@if ($nombre == 'Juan')
    <p>Ud se llama Juan</p>
@endif
@if ($edad >= 18)
    <p>Ud es mayor de edad</p>
@else
    <p>Ud es menor de edad</p>
@endif

<h2>Condicional SWITCH</h2>
@php $status = 2; @endphp
@switch($status)
    @case(1)
        Caso 1
    @break

    @case(2)
        Caso 2
    @break

    @default
        Caso por defecto
@endswitch

<h2>Bucle FOR</h2>
@for ($i = 0; $i < 10; $i++)
    {{ $i }},
@endfor

<h2>Bucle WHILE</h2>
@php $cont = 1; @endphp
@while ($cont <= 10)
    {{ $cont++ }},
@endwhile

<h2>Bucle FOREACH</h2>
@php $nombres = ['Mateo', 'Marcos', 'Lucas', 'Juan']; @endphp
@foreach ($nombres as $nombre)
    {{ $nombre }},
@endforeach

<h2>Ejecutar funciones PHP</h2> Fecha: {{ now()->format('d/m/Y') }}
