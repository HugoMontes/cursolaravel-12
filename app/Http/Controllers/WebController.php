<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class WebController extends Controller {
    public function reviews() {
        $peliculas = Pelicula::orderBy('id', 'DESC')->paginate(5);
        return view('web.reviews', compact('peliculas'));
    }
}
