{{-- <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre">
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>
                </form>
            </div>


    </div>
</div> --}}

<style>
    .cont-modal {
        z-index: 5;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mdl {
        background-color: white;
        border-radius: 10px;
        width: 30%;
        border: 1px solid #ccc;

    }
</style>


<div class="d-flex p-2 position-fixed cont-modal">

    <div class="position-fixed mdl p-4" id="modalCreaEst">
        <div class="">
            <div class="d-flex justify-content-between">
                <h5 class="">Crear Grupos</h5>
                <button wire:click="cerrarModal()" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
            </div>
            <div class="">
                <form>
                    <div class="mb-3">
                        <div class="mb-4">
                            <label for="docente_id" class="col-form-label">Docente:</label>
                            <input type="number" class="form-control" id="docente_id" wire:model="docente_id">
                        </div>
                        <div class="mb-4">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" wire:model="nombre">
                        </div>
                        {{-- <div class="mb-4">
                            <label for="apellido" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" wire:model="apellido">
                        </div>
                        <div class="mb-4">
                            <label for="usuario" class="col-form-label">Usuario:</label>
                            <input type="email" class="form-control" id="usuario" wire:model="usuario">
                        </div> --}}
                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" wire:click="cerrarModal()" class="btn btn-secondary">Close</button>
                <button type="button" wire:click="guardar()" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>

</div>
