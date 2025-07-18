<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        // create(NombreTabla, FuncionCrearTabla)
        Schema::create('generos', function (Blueprint $table) {
            // Clave primaria
            $table->id();
            // Agregar las columnas de las tablas 
            $table->string('genero', 100);
            // timestamps(): permite agregar atributos tipo fecha
            // created_at y updated_at para el control de la tabla 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('generos');
    }
};
