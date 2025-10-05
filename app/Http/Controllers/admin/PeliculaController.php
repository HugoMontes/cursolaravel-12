<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeliculaRequest;
use App\Models\Director;
use App\Models\Genero;
use App\Models\Imagen;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PeliculaController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $titulo = isset($request->titulo) ? $request->titulo : '';
        $peliculas = Pelicula::search($titulo)->orderBy('id', 'DESC')->paginate(5);
        return view('admin.pelicula.index', compact('peliculas', 'titulo'));
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
    public function store(PeliculaRequest $request) {
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

    public function consultaEloquentORM() {
        $peliculas = Pelicula::with(['user', 'genero', 'directores'])
            ->where('estreno', '>', now()->subYear())
            ->orderBy('titulo')
            ->paginate(10);

        dd($peliculas);

        // Crear nueva película asociada al usuario autenticado
        $pelicula = Pelicula::create([
            'titulo' => 'Nueva película',
            'user_id' => Auth::user()->id,
            // ... otros campos
        ]);
    }

    public function queryBuilder() {
        // Consulta con joins para obtener películas con datos de usuario
        $peliculas = DB::table('peliculas')
            ->join('users', 'peliculas.user_id', '=', 'users.id')
            ->select('peliculas.*', 'users.name as autor')
            ->where('peliculas.costo', '>', 10)
            ->get();

        dd($peliculas);

        // Insertar rápido sin modelo
        DB::table('peliculas')->insert([
            'titulo' => 'Película rápida',
            'user_id' => 1,
            // ... otros campos
        ]);
    }

    public function sqlCrudo() {
        // Consulta compleja con SQL directo
        $peliculas = DB::select("
            SELECT p.*, u.name as autor, 
                COUNT(d.id) as num_directores
            FROM peliculas p
            JOIN users u ON p.user_id = u.id
            LEFT JOIN pelicula_director pd ON p.id = pd.pelicula_id
            LEFT JOIN directores d ON pd.director_id = d.id
            WHERE p.estreno > ?
            GROUP BY p.id
        ", [now()->subYear()]);

        dd($peliculas);

        // Llamar stored procedure
        DB::statement('CALL actualizar_contador_peliculas(?)', [Auth::user()->id]);
    }
}
