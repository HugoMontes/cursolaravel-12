<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Imagen;
use Illuminate\Http\Request;

class ImagenController extends Controller {

    public function index() {
        //	Obtener las Imagenes
        //	$imagenes=Imagen::all();
        $imagenes = Imagen::orderBy('id', 'ASC')->paginate(6);
        // Probar dd($imagenes);
        return view('admin.imagen.index', compact('imagenes'));
    }
}
