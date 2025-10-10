<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagenesTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {
        DB::table('imagenes')->delete();
        DB::table('imagenes')->insert(array(
            0 =>
            array(
                'id' => 3,
                'nombre' => 'cinema_1759868980.jpg',
                'pelicula_id' => 3,
                'created_at' => '2025-10-07 20:29:40',
                'updated_at' => '2025-10-07 20:29:40',
            ),
            1 =>
            array(
                'id' => 4,
                'nombre' => 'cinema_1759869014.jpg',
                'pelicula_id' => 4,
                'created_at' => '2025-10-07 20:30:14',
                'updated_at' => '2025-10-07 20:30:14',
            ),
            2 =>
            array(
                'id' => 5,
                'nombre' => 'cinema_1759869267.jpg',
                'pelicula_id' => 5,
                'created_at' => '2025-10-07 20:34:27',
                'updated_at' => '2025-10-07 20:34:27',
            ),
            3 =>
            array(
                'id' => 6,
                'nombre' => 'cinema_1759869294.jpg',
                'pelicula_id' => 6,
                'created_at' => '2025-10-07 20:34:54',
                'updated_at' => '2025-10-07 20:34:54',
            ),
        ));
    }
}
