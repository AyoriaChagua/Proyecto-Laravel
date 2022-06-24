<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Rentas') }}
    </h2>
</x-slot>


<div class="w-5/12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-4">
        <div class="bd-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-5">
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 tittle_rentas">Rentas activas</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        @foreach ( $rentas_activas as $renta_ac )
                        <tr>
                            <td class="border px-4 py-2 text-blue-600">{{$renta_ac->pelicula}}</td>
                            <td class="border px-4 py-2 text-blue-600">{{$renta_ac->fecha_devolucion}}</td>
                            <td class="border px-4 py-2"><button wire:click="modificar_devolucion({{$renta_ac->renta_id}})" class="bg-cyan-500 hover:bg-cyan-400 text-white font-bold py-2 px-4 my-3">Modificar</button>
                            @if ($modal_devolucion)
                                @include('livewire.modificar_devolucion')
                            @endif</td>
                            <td class="border px-4 py-2">
                                <button wire:click="" class="bg-cyan-500 hover:bg-cyan-400 text-white font-bold py-2 px-4 my-3">Entregar</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>



<div class="py-3">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bd-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Pelicula</th>
                            <th class="px-4 py-2">Fecha de Registro</th>
                            <th class="px-4 py-2">Fecha de Devolución</th>
                            <th class="px-4 py-2">Fecha de entrega</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        @foreach ( $rentas as $renta )
                        <tr>
                            <td class="border px-4 py-2 text-blue-600">{{$renta->pelicula}}</td>
                            <td class="border px-4 py-2 text-blue-600">{{$renta->fecha_registro}}</td>
                            <td class="border px-4 py-2 text-blue-600">{{$renta->fecha_devolucion}}</td>
                            <td class="border px-4 py-2 text-blue-600">{{$renta->fecha_entrega}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
