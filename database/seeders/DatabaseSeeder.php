<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelicula;
use App\Models\User;
use App\Models\Renta;
use App\Models\Membresia;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 = 0');
        DB::table('membresias')->delete();
        DB::table('users')->delete();
        DB::table('peliculas')->delete();
        DB::table('rentas')->delete();

        $this->call([
            MembresiaSeeder::class,
        ]);
        $this->call([
            UserSeeder::class,
        ]);
        $this->call([
            PeliculaSeeder::class,
        ]);
        $this->call([
            RentaSeeder::class,
        ]);
    }
}
