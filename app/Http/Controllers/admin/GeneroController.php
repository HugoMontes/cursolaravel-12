<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $generos = Genero::orderBy('id', 'ASC')->paginate(5);
        return view('admin.genero.index', compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('admin.genero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // Adicionando validaciones directas
        $dataGenero = $request->validate(['genero' => 'max:100|required|unique:generos']);
        $genero = new Genero($dataGenero);
        $genero->save();
        return redirect()->route('genero.index')
            ->with('success', 'Se ha guardado ' . $genero->genero . ' exitosamente.');
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
        $genero = Genero::find($id);
        return view('admin.genero.edit', compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $dataGenero = $request->validate(['genero' => 'max:100|required|unique:generos']);
        $genero = Genero::find($id);
        // Otra alternativa es mediante la función fill 
        $genero->fill($dataGenero);
        $genero->save();
        return redirect()->route('genero.index')
            ->with('success', 'Se ha editado ' . $genero->genero . ' exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $genero = Genero::find($id);
        $genero->delete();
        return redirect()->route('genero.index')
            ->with('success', 'Se ha eliminado ' . $genero->genero . ' exitosamente.');
    }
}
