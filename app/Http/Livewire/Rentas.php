<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Renta;

class Rentas extends Component
{   
    public $fecha_devolucion;
    public $modal_devolucion = false;
    
    public function render()
    {
        $rentas = DB::table('rentas') 
        ->join('peliculas', 'peliculas.pelicula_id', '=', 'rentas.pelicula_id')
        ->select('peliculas.pelicula_nombre AS pelicula', 'rentas.fecha_registro', 'rentas.fecha_devolucion', 'rentas.fecha_entrega')
        ->where('rentas.cliente_id', '=', auth()->user()->id)
        ->where('rentas.fecha_entrega', '<>', null)
        ->get();

        $rentas_activas = DB::table('rentas') 
        ->join('peliculas', 'peliculas.pelicula_id', '=', 'rentas.pelicula_id')
        ->select('peliculas.pelicula_nombre AS pelicula', 'rentas.fecha_registro', 'rentas.fecha_devolucion', 'rentas.fecha_entrega', 'rentas.renta_id')
        ->where('rentas.cliente_id', '=', auth()->user()->id)
        ->where('rentas.fecha_entrega', '=', null)
        ->get();
        $this->rentas = $rentas;
        $this->rentas_activas = $rentas_activas;
        return view('livewire.rentas');
    }

    public function modificar_devolucion($id){
        $renta = Renta::findOrFail($id);
        $this->renta_id = $id;
        $this->fecha_devolucion = $renta->fecha_devolucion;
        $this->limpiar_campos();
        $this->abrir_modal_devo();
    }

    public function abrir_modal_devo(){
        $this->modal_devolucion = true;
    }

    public function cerrar_modal_devo(){
        $this->modal_devolucion = false;
    }
    public function limpiar_campos(){
        $this->fecha_devolucion = '';
    }
}
