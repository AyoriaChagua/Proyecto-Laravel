<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Membresia;
use Carbon\Carbon;


class MembresiaSeeder extends Seeder
{    
    public function run()
    {
        $date = Carbon::now();
        for($i= 0; $i < 5; $i++){
            Membresia::create([
                'fecha_expedicion' => $date->toDateString(),
                'fecha_expiracion' => $date->addMonths(2)->toDateString(),
            ]);
        } 
    }
}
