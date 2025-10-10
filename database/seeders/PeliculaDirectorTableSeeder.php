<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeliculaDirectorTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {
        DB::table('pelicula_director')->delete();
        DB::table('pelicula_director')->insert(array(
            0 =>
            array(
                'id' => 1,
                'pelicula_id' => 6,
                'director_id' => 3,
                'created_at' => '2025-10-10 21:11:50',
                'updated_at' => '2025-10-10 21:11:50',
            ),
            1 =>
            array(
                'id' => 2,
                'pelicula_id' => 6,
                'director_id' => 2,
                'created_at' => '2025-10-10 21:11:50',
                'updated_at' => '2025-10-10 21:11:50',
            ),
            2 =>
            array(
                'id' => 3,
                'pelicula_id' => 6,
                'director_id' => 4,
                'created_at' => '2025-10-10 21:11:50',
                'updated_at' => '2025-10-10 21:11:50',
            ),
            3 =>
            array(
                'id' => 4,
                'pelicula_id' => 5,
                'director_id' => 5,
                'created_at' => '2025-10-10 21:12:08',
                'updated_at' => '2025-10-10 21:12:08',
            ),
            4 =>
            array(
                'id' => 5,
                'pelicula_id' => 5,
                'director_id' => 1,
                'created_at' => '2025-10-10 21:12:08',
                'updated_at' => '2025-10-10 21:12:08',
            ),
            5 =>
            array(
                'id' => 6,
                'pelicula_id' => 4,
                'director_id' => 3,
                'created_at' => '2025-10-10 21:12:19',
                'updated_at' => '2025-10-10 21:12:19',
            ),
            6 =>
            array(
                'id' => 7,
                'pelicula_id' => 3,
                'director_id' => 5,
                'created_at' => '2025-10-10 21:12:33',
                'updated_at' => '2025-10-10 21:12:33',
            ),
            7 =>
            array(
                'id' => 8,
                'pelicula_id' => 3,
                'director_id' => 1,
                'created_at' => '2025-10-10 21:12:33',
                'updated_at' => '2025-10-10 21:12:33',
            ),
            8 =>
            array(
                'id' => 9,
                'pelicula_id' => 3,
                'director_id' => 3,
                'created_at' => '2025-10-10 21:12:33',
                'updated_at' => '2025-10-10 21:12:33',
            ),
            9 =>
            array(
                'id' => 10,
                'pelicula_id' => 3,
                'director_id' => 4,
                'created_at' => '2025-10-10 21:12:34',
                'updated_at' => '2025-10-10 21:12:34',
            ),
        ));
    }
}
