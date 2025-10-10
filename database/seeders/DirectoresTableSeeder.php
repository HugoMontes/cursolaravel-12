<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectoresTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {
        DB::table('directores')->delete();
        DB::table('directores')->insert(array(
            0 =>
            array(
                'id' => 1,
                'nombre' => 'Jorge Gonzales',
                'created_at' => '2025-10-07 20:16:48',
                'updated_at' => '2025-10-07 20:16:48',
            ),
            1 =>
            array(
                'id' => 2,
                'nombre' => 'Ruben Aguirre',
                'created_at' => '2025-10-07 20:17:02',
                'updated_at' => '2025-10-07 20:17:02',
            ),
            2 =>
            array(
                'id' => 3,
                'nombre' => 'Jhon Smith',
                'created_at' => '2025-10-07 20:17:20',
                'updated_at' => '2025-10-07 20:17:20',
            ),
            3 =>
            array(
                'id' => 4,
                'nombre' => 'Maria Antonieta',
                'created_at' => '2025-10-07 20:17:34',
                'updated_at' => '2025-10-07 20:17:34',
            ),
            4 =>
            array(
                'id' => 5,
                'nombre' => 'Julio Cesar',
                'created_at' => '2025-10-07 20:17:45',
                'updated_at' => '2025-10-07 20:17:45',
            ),
        ));
    }
}
