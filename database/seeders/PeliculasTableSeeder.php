<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeliculasTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {
        DB::table('peliculas')->delete();
        DB::table('peliculas')->insert(array(
            0 =>
            array(
                'id' => 3,
                'titulo' => 'Avengers',
                'costo' => 66.0,
                'resumen' => '<p>Nullam consequat cursus nunc, non commodo erat venenatis eget. Donec molestie nisl erat, ac finibus ipsum consectetur in. Curabitur convallis nibh mi, vel dictum ante suscipit id. Ut mattis purus vestibulum tortor condimentum, at hendrerit massa feugiat. Suspendisse potenti. Sed posuere nec massa quis placerat. Vivamus maximus tincidunt tortor, eu euismod nulla elementum nec. Praesent molestie sed felis vel vehicula. Vestibulum at ligula ac felis semper cursus ac sed ligula. Mauris efficitur, turpis vitae lobortis vestibulum, enim lorem ultricies quam, eget faucibus odio metus non nibh. Vestibulum et elementum nisi. Donec luctus ullamcorper lacinia. Etiam convallis ultrices pulvinar. Praesent consectetur, velit quis varius pharetra, orci diam euismod ante, quis facilisis ipsum enim ut odio. Praesent sollicitudin nunc id turpis vestibulum, id mattis ex euismod. Phasellus mattis diam in consequat dictum.</p>',
                'estreno' => '2025-10-23',
                'created_at' => '2025-10-07 20:29:40',
                'updated_at' => '2025-10-07 20:29:40',
                'genero_id' => 3,
                'user_id' => 1,
            ),
            1 =>
            array(
                'id' => 4,
                'titulo' => 'Matrix',
                'costo' => 30.0,
                'resumen' => '<p>Nullam consequat cursus nunc, non commodo erat venenatis eget. Donec molestie nisl erat, ac finibus ipsum consectetur in. Curabitur convallis nibh mi, vel dictum ante suscipit id. Ut mattis purus vestibulum tortor condimentum, at hendrerit massa feugiat. Suspendisse potenti. Sed posuere nec massa quis placerat. Vivamus maximus tincidunt tortor, eu euismod nulla elementum nec. Praesent molestie sed felis vel vehicula. Vestibulum at ligula ac felis semper cursus ac sed ligula. Mauris efficitur, turpis vitae lobortis vestibulum, enim lorem ultricies quam, eget faucibus odio metus non nibh. Vestibulum et elementum nisi. Donec luctus ullamcorper lacinia. Etiam convallis ultrices pulvinar. Praesent consectetur, velit quis varius pharetra, orci diam euismod ante, quis facilisis ipsum enim ut odio. Praesent sollicitudin nunc id turpis vestibulum, id mattis ex euismod. Phasellus mattis diam in consequat dictum.</p>',
                'estreno' => '2025-10-25',
                'created_at' => '2025-10-07 20:30:14',
                'updated_at' => '2025-10-07 20:30:14',
                'genero_id' => 3,
                'user_id' => 1,
            ),
            2 =>
            array(
                'id' => 5,
                'titulo' => 'Spiderman',
                'costo' => 45.0,
                'resumen' => '<p>Nullam consequat cursus nunc, non commodo erat venenatis eget. Donec molestie nisl erat, ac finibus ipsum consectetur in. Curabitur convallis nibh mi, vel dictum ante suscipit id. Ut mattis purus vestibulum tortor condimentum, at hendrerit massa feugiat. Suspendisse potenti. Sed posuere nec massa quis placerat. Vivamus maximus tincidunt tortor, eu euismod nulla elementum nec. Praesent molestie sed felis vel vehicula. Vestibulum at ligula ac felis semper cursus ac sed ligula. Mauris efficitur, turpis vitae lobortis vestibulum, enim lorem ultricies quam, eget faucibus odio metus non nibh. Vestibulum et elementum nisi. Donec luctus ullamcorper lacinia. Etiam convallis ultrices pulvinar. Praesent consectetur, velit quis varius pharetra, orci diam euismod ante, quis facilisis ipsum enim ut odio. Praesent sollicitudin nunc id turpis vestibulum, id mattis ex euismod. Phasellus mattis diam in consequat dictum.</p>',
                'estreno' => '2025-10-16',
                'created_at' => '2025-10-07 20:34:27',
                'updated_at' => '2025-10-07 20:34:27',
                'genero_id' => 3,
                'user_id' => 1,
            ),
            3 =>
            array(
                'id' => 6,
                'titulo' => 'Titanic',
                'costo' => 65.0,
                'resumen' => '<p>Nullam consequat cursus nunc, non commodo erat venenatis eget. Donec molestie nisl erat, ac finibus ipsum consectetur in. Curabitur convallis nibh mi, vel dictum ante suscipit id. Ut mattis purus vestibulum tortor condimentum, at hendrerit massa feugiat. Suspendisse potenti. Sed posuere nec massa quis placerat. Vivamus maximus tincidunt tortor, eu euismod nulla elementum nec. Praesent molestie sed felis vel vehicula. Vestibulum at ligula ac felis semper cursus ac sed ligula. Mauris efficitur, turpis vitae lobortis vestibulum, enim lorem ultricies quam, eget faucibus odio metus non nibh. Vestibulum et elementum nisi. Donec luctus ullamcorper lacinia. Etiam convallis ultrices pulvinar. Praesent consectetur, velit quis varius pharetra, orci diam euismod ante, quis facilisis ipsum enim ut odio. Praesent sollicitudin nunc id turpis vestibulum, id mattis ex euismod. Phasellus mattis diam in consequat dictum.</p>',
                'estreno' => '2025-10-18',
                'created_at' => '2025-10-07 20:34:54',
                'updated_at' => '2025-10-09 21:20:34',
                'genero_id' => 4,
                'user_id' => 1,
            ),
        ));
    }
}
