<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller {

    public function index() {
        return 'Hola desde PruebaController';
    }

    public function misDatos($nombre = 'Juan', $edad = 10) {
        return 'Nombre: ' . $nombre . '<br> Edad: ' . $edad;
    }

    public function mostrarVistaBlade() {
        return view('prueba.vista');
    }

    public function datosPersonaVista($nombre, $edad) {
        $data = compact('nombre', 'edad');
        dd($data);
        return view('prueba.datos', $data);
    }
}
