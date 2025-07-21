<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {
    // Indicar nombre de la tabla
    protected $table = 'generos';
    // Indicar nombre de la clave primaria
    protected $primaryKey = 'id';
    // Indicar campos gestionados por el usuario
    // fillable es un atributo que se puede rellenar, guardar o devolver
    // en el modelo, ya que todos los modelos Eloquent protegen
    // contra la asignación masiva.
    protected $fillable = ['genero'];
    // Indicar que las fechas para guardar y actualizar
    // las administre el framework
    public $timestamps = true;

    // Un genero tiene muchas peliculas
    public function peliculas() {
        // Retornar el tipo de relación indicando el Modelo 
        return $this->hasMany(Pelicula::class, 'genero_id', 'id');
    }
}
