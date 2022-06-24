<div class="bg-white shadow-xl sm:rounded-lg px-4 py-5 mt-10 flex justify-center">
    <div class="flex flex-col w-40">
        <h1 class="font-medium leading-tight text-5xl mt-0 mb-2 text-blue-600">Membresia</h1>
        @foreach($membresia as $mem)
        <span class="mt-8">
            <p class="font-bold">Fecha de expiracion de su Membresía</p>
            {{ $mem->fecha_expiracion }}
        </span>
        <span class="mt-8">
            <p class="font-bold">Fecha de expedicion de su Membresía</p>
            {{ $mem->fecha_expedicion }}
        </span>
        @endforeach
        <div class="flex space-x-2 mt-6 w-64">
            <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Extender membresía</button>
            <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Cancelar Membresía</button>
        </div>
    </div>
</div>
