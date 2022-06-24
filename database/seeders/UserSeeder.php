<?php

namespace Database\Seeders;

use App\Models\Membresia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(){
        $date = Carbon::now();
        $membresias = Membresia::all();
        $contador = 0;
        foreach($membresias as $membresia){
                $contador++;
                User::create(
                    [
                        'name'=>'usuario'.$contador,
                        'apellido_paterno'=>'paternal'.$contador,
                        'apellido_materno'=>'maternal'.$contador,
                        'fecha_nacimiento'=>$date->addDays(7)->toDateString(),
                        'email'=>'email'.$contador.'@test.com',
                        'password'=>bcrypt('contrasenia'),
                        'membresia_id'=> $membresia->membresia_id,
                    ]
                );
        }
    }
}
