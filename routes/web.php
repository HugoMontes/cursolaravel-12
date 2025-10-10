<?php

use App\Http\Controllers\admin\DirectorController;
use App\Http\Controllers\admin\GeneroController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ImagenController;
use App\Http\Controllers\admin\PeliculaController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
})->name('web.home');
Route::get('/reviews', [WebController::class, 'reviews'])->name('web.reviews');
Route::get('/movie/details/{id}', [WebController::class, 'viewDetails'])->name('web.movie.details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
    Route::resource('user', UserController::class);
    Route::resource('genero', GeneroController::class);
    Route::resource('director', DirectorController::class);
    Route::resource('pelicula', PeliculaController::class);
    Route::get('/imagen', [ImagenController::class, 'index'])->name('imagen.index');
});

require __DIR__ . '/auth.php';

// Crear una ruta de prueba
Route::get('hola', function () {
    return 'Hola desde web.php';
})->name('practica1');

// Paso de parametros
Route::get('persona/{nombre}/{edad}', function ($nombre, $edad) {
    return 'Mi nombre es ' . $nombre . ', tengo ' . $edad . ' años.';
})->name('practica2');

// Valores por defecto
Route::get('estudiante/{nombre?}', function ($nombre = 'Juan') {
    return 'Nombre del estudiante: ' . $nombre;
})->name('practica3');

// Validacion de parametros
Route::get('/usuario/{id}', function ($id) {
    return "ID de usuario: " . $id;
})->where('id', '[0-9]+'); // Solo acepta números

Route::get('/categoria/{slug}', function ($slug) {
    return "Categoría: " . $slug;
})->where('slug', '[A-Za-z\-]+'); // Solo letras y guiones

// Objetos JSON
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
    })->name('saludo.dia');
    Route::get('tarde', function () {
        return 'Buenas tardes';
    })->name('saludo.tarde');
    Route::get('noche', function () {
        return 'Buenas noches';
    })->name('saludo.noche');
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
