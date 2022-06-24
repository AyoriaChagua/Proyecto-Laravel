<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelicula;
use App\Models\User;
use App\Models\Renta;
use Carbon\Carbon;

class RentaSeeder extends Seeder
{
    public function run(){
        $date = Carbon::now();
        $usuarios = User::all();
        $peliculas = Pelicula::all();

        $usuarios_id_list = array();
        $peliculas_id_list = array();

        foreach($usuarios as $usuario){
            array_push($usuarios_id_list, $usuario->id);
        }

        foreach($peliculas as $pelicula){
            array_push($peliculas_id_list, $pelicula->pelicula_id);
        }

        $cantidad = mt_rand(0,10);
        for($i = 0; $i < $cantidad; $i++){
            $dias = mt_rand(0,7);
            $u_id = array_rand($usuarios_id_list);
            $cant_pels_usr = mt_rand(0, 3);
            for($j = 0; $j < $cant_pels_usr; $j++){
                $p_id = array_rand($peliculas_id_list);
                Renta::create(
                    [
                        'pelicula_id'=>$peliculas_id_list[$p_id],
                        'cliente_id'=>$usuarios_id_list[$u_id],
                        'fecha_registro'=>$date->toDateTimeString(),
                        'fecha_devolucion'=>$date->addDays($dias),
                        'fecha_entrega'=>$date->addDays($dias)
                    ]
                );
            }
        }
    }
}