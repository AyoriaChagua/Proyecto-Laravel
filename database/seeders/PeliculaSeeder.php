<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelicula;

class PeliculaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Pelicula::create(
                [
                    'pelicula_nombre' => 'pelicula'.$i,
                    'pelicula_director'=> 'director'.$i, 
                    'pelicula_genero' => 'terror', 
                    'pelicula_artista1'=>'artista'.$i, 
                    'pelicula_artista2' => 'artista_'.$i+1
                ]
            );
        }
    }
}
