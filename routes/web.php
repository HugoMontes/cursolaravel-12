<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plantilla', function () {
    return view('admin.layouts.main');
});

// Crear una ruta de prueba
Route::get('hola', function () {
    return 'Hola desde web.php';
});

// Paso de parametros
Route::get('persona/{nombre}/{edad}', function ($nombre, $edad) {
    return 'Mi nombre es ' . $nombre . ', tengo ' . $edad . ' años.';
});

// Valores por defecto
Route::get('estudiante/{nombre?}', function ($nombre = 'Juan') {
    return 'Nombre del estudiante: ' . $nombre;
});

Route::get('/usuario/{id}', function ($id) {
    return "ID de usuario: " . $id;
})->where('id', '[0-9]+'); // Solo acepta números

Route::get('/categoria/{slug}', function ($slug) {
    return "Categoría: " . $slug;
})->where('slug', '[A-Za-z\-]+'); // Solo letras y guiones


Route::get('/posts', function () {
    return response()->json([
        'posts' => [
            ['id' => 1, 'title' => 'Post 1'],
            ['id' => 2, 'title' => 'Post 2']
        ]
    ]);
});

Route::group(['prefix' => 'saludo'], function () {
    Route::get('dia', function () {
        return 'Buenos dias';
    });
    Route::get('tarde', function () {
        return 'Buenas tardes';
    });
    Route::get('noche', function () {
        return 'Buenas noches';
    });
});


Route::get('prueba', [PruebaController::class, 'index']);

Route::get('prueba/datos/{nombre?}/{edad?}', [PruebaController::class, 'misdatos']);

Route::get('prueba/vista', function () {
    return view('prueba.vista');
});

Route::get('prueba/controlador', [PruebaController::class, 'mostrarVistaBlade']);

Route::get('prueba/persona/{nombre}/{edad}', [PruebaController::class, 'datosPersonaVista']);

Route::get('prueba/componentes', function () {
    return view('prueba.componentes');
});
