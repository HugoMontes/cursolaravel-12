<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $directores = Director::orderBy('id', 'ASC')->paginate(5);
        return view('admin.director.index', compact('directores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('admin.director.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // Adicionando validaciones directas
        $data = $request->validate(['nombre' => 'required|unique:directores']);
        $director = new Director($data);
        $director->save();
        return redirect()->route('director.index')
            ->with('success', 'Se ha guardado ' . $director->nombre . ' exitosamente.');
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
        $director = Director::find($id);
        return view('admin.director.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //	Adicionando validaciones directas 
        $data = $request->validate(['nombre' => 'required|unique:directores']);
        $director = Director::find($id);
        //	Actualizando con la funcion update
        $director->update($data);
        return redirect()->route('director.index')
            ->with('success', 'Se ha editado ' . $director->nombre . ' exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $director = Director::find($id);
        $director->delete();
        return redirect()->route('director.index')
            ->with('success', 'Se ha eliminado ' . $director->nombre . ' exitosamente.');
    }
}
