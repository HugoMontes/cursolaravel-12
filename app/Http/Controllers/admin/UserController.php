<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        // Obtener todos los registros
        // $users = User::all();
        // Obtener todos los registros ordenados
        // $users = User::orderBy('id', 'DESC')->get(); 
        // Listar a todos los usuarios agregando paginacion 
        $users = User::orderBy('id', 'ASC')->paginate(5);
        // Devolvemos la vista con los usuarios
        return view('admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // Recuperar todos los datos del formulario en un ojbeto User 
        $user = new User($request->all());
        // Usar bcrypt para encriptar password
        $user->password = bcrypt($user->password);
        // Alternativamente
        // $user->password=bcrypt($request['password']);
        // Persistir usuario
        $user->save();
        return 'Usuario registrado';
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
