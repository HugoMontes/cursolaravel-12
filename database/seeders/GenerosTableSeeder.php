<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerosTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {
        DB::table('generos')->delete();
        DB::table('generos')->insert(array(
            0 =>
            array(
                'id' => 1,
                'genero' => 'Terror',
                'created_at' => '2025-10-07 20:15:20',
                'updated_at' => '2025-10-07 20:15:20',
            ),
            1 =>
            array(
                'id' => 2,
                'genero' => 'Infantil',
                'created_at' => '2025-10-07 20:15:28',
                'updated_at' => '2025-10-07 20:15:28',
            ),
            2 =>
            array(
                'id' => 3,
                'genero' => 'Acción',
                'created_at' => '2025-10-07 20:15:42',
                'updated_at' => '2025-10-07 20:15:42',
            ),
            3 =>
            array(
                'id' => 4,
                'genero' => 'Drama',
                'created_at' => '2025-10-07 20:15:57',
                'updated_at' => '2025-10-07 20:15:57',
            ),
        ));
    }
}
