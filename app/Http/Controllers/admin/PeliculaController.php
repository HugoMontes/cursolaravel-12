<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\Genero;
use App\Models\Imagen;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeliculaController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('admin.pelicula.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $generos = Genero::orderBy('genero', 'ASC')->get();
        $directores = Director::orderBy('nombre', 'ASC')->get();
        // Probar con dd($generos);
        return view('admin.pelicula.create', compact('generos', 'directores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // Recuperar los datos del formulario
        $pelicula = new Pelicula($request->all());
        // Recuperar el id del usuario autenticado 
        $pelicula->user_id = Auth::user()->id;
        // Guardar la Pelicula
        $pelicula->save();

        // Una vez guardado pelicula, guardar en la tabla pivote
        // attach(): Recibe un array con los ids a relacionar
        // Probar dd($request->directores);
        $pelicula->directores()->attach($request->directores);

        // Manipulacion de imagenes
        // Validando la imagen
        if ($request->file('imagen')) {
            // Recuperar archivo
            $file = $request->file('imagen');
            // Observar los datos que trae el archivo
            // Probar dd($file);
            // Definir un nombre unico para el archivo
            // funcion php time(): devuelve la fecha actual
            $name_file = 'cinema_' . time() . '.' . $file->getClientOriginalExtension();
            // Indicar la ruta donde se guardara el archivo, para lo cual
            // crear la carpeta cursolaravel/public/imagenes/pelicula 
            $path_file = public_path() . '/imagenes/pelicula';
            // Guardar el archivo de la imagen
            $file->move($path_file, $name_file);
        }
        // Guardar imagen en la base de datos 
        $imagen = new Imagen();
        $imagen->nombre = $name_file;
        // associate(): Asociar imagen con la pelicula 
        $imagen->pelicula()->associate($pelicula);
        $imagen->save();
        // Redireccionar
        return redirect()->route('pelicula.index')->with('success', 'Se ha guardado ' . $pelicula->titulo . ' exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
