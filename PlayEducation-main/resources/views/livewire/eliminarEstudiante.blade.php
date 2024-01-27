<style>
    .cont-modal {
        position: fixed !important;
        z-index: 10000 !important;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #0000001f;
    }

    .mdl {
        background-color: white;
        border-radius: 10px;
        width: 30%;
        max-width: 30%;
        max-height: 100%;
        border: 1px solid #ccc;
        box-shadow: #00000047 0px 0px 79px -7px;
    }

    .btn-prim {
        background-color: #4b68e6;
        border-color: #4b68e6;
        color: #ffffff;
    }

    .btn-prim:hover {
        background-color: #4b68e6;
        border-color: #5b55e6;
    }

    .btn-sec {
        background-color: #ffffff;
        border-color: #4b68e6;
        color: #4b68e6;
    }

    .btn-sec:hover {
        background-color: #f2f2f2;
        border-color: #4b68e6;
        color: #4b68e6;
    }
</style>

<div>
    <div class="cont-modal">
        <div class="mdl p-4">
            <div class="d-flex justify-content-between">
                <h5 class="">Eliminar estudiante</h5>
                <button wire:click="cerrarMdlEliminarEst()" type="button" class="btn-close btn-close-white"
                    aria-label="Close"></button>
            </div>
            <div class="my-4">
                <p>Está seguro de que desea eliminar este estudiante?</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button type="button" wire:click="cerrarMdlEliminarEst()" class="btn btn-sec mb-0">Cancelar</button>
                <button type="button" wire:click="eliminarEst()" class="btn btn-prim mb-0">Eliminar</button>
            </div>
        </div>
    </div>
</div>
