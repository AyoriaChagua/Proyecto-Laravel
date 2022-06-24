<div  class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover " >
    <div class="text-center p-5 flex-auto justify-center ">
        <div class="fixed inset -0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form action="">
                    <div class="bg-cyan-600 px-4 pt-5 pb-4 sm:p-6 sm:pb-4 ">
                        <div class="mb-4">
                            <label for="pelicula" class="block text-blue-600 text-sm font-bold mb-2">Pelicula: {{$renta_ac->pelicula}} </label>
                        </div>
                        <div class="mb-4">
                            <label for="fecha_registro" class="block text-blue-600 text-sm font-bold mb-2">Fecha de registro: {{$renta_ac->fecha_registro}}</label>
                        </div>
                        <div class="mb-4">
                            <label for="fecha_devolucion" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Fecha de devolución:</label>
                            <div class="relative mb-5 mt-2">
                                <input class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="MM/YY" id="fecha_devolucion" wire:model="fecha_devolucion"/>
                            </div>
                            
                        </div>
                       
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent=guardar() type="button" class="inline-flex justify-center w-full rounded-md border bg-indigo-600 border-transparent px-4 py-2 bg-purple-600 focus-outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5" >Guardar</button>
                            </span>
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click=cerrar_modal_devo() type="button" class="inline-flex justify-center w-full rounded-md border bg-red-600 border-transparent px-4 py-2  inline-none focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5" >Cancelar</button>
                            </span>
                        </div>
                    </div>
                </form>
             </div>
    </div>
</div>
