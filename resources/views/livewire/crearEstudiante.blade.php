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
                <h5 class="">Crear estudiante</h5>
                <button wire:click="cerrarMdlCrearEst()" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
            </div>
            <div class="">
                <form>
                    <div class="mb-3">
                        <div class="mb-4">
                            <label for="grupo-id" class="col-form-label">Grupo:</label>
                            <input type="number" class="form-control" id="grupo-id" wire:model="grupo_id">
                        </div>
                        <div class="mb-4">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" wire:model="nombre">
                        </div>
                        <div class="mb-4">
                            <label for="apellido" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" wire:model="apellido">
                        </div>
                        <div class="mb-4">
                            <label for="usuario" class="col-form-label">Usuario:</label>
                            <input type="email" class="form-control" id="usuario" wire:model="usuario">
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" wire:click="cerrarMdlCrearEst()" class="btn btn-secondary">Close</button>
                <button type="button" wire:click="guardarEst()" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>

</div>
