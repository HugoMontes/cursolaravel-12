<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class WebController extends Controller {

    public function index() {
        return view('web.index');
    }

    public function reviews() {
        $peliculas = Pelicula::orderBy('id', 'DESC')->paginate(5);
        return view('web.reviews', compact('peliculas'));
    }

    public function viewDetails(int $id) {
        //	Buscar pelicula
        $pelicula = Pelicula::find($id);
        //	Probar dd($pelicula);
        return view('web.movie-details', compact('pelicula'));
    }

    public function videos() {
        return view('web.videos');
    }
}
