<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            // Agregar las columnas de la tabla
            $table->string('titulo');
            $table->float('costo');
            $table->text('resumen');
            $table->date('estreno');
            $table->timestamps();
            // Agregar la relación 1aN con la tabla generos
            $table->unsignedBigInteger('genero_id'); // no negativos 
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
            // Agregar la relación 1aN con la tabla users 
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('peliculas');
    }
};
