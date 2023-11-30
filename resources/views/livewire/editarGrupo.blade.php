{{-- editarGrupo.blade.php

<div class="d-flex p-2 position-fixed cont-modal">
    <div class="position-fixed mdl p-4" id="modalEditarGrupo">
        <div class="d-flex justify-content-between">
            <h5 class="">Editar Grupo</h5>
            <button wire:click="cerrarModal()" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
        </div>
        <div class="mt-3">
            <form>
                <div class="mb-4">
                    <label for="docente_id" class="col-form-label">Docente:</label>
                    <input type="text" class="form-control" id="docente_id" wire:model="docente_id">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" wire:model="nombre">
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <button type="button" wire:click="cerrarModal()" class="btn btn-secondary me-2">Close</button>
            <button type="button" wire:click="guardar()" wire:loading.attr="disabled" class="btn btn-primary">
                Save changes
            </button>
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
    <div class="position-fixed mdl p-4" id="modalEditarGrupo">
        <div class="d-flex justify-content-between">
            <h5 class="">Editar Grupo</h5>
            <button wire:click="cerrarModal()" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
        </div>
        <div class="mt-3">
            <form>
                <div class="mb-4">
                    <label for="docente_id" class="col-form-label">Docente:</label>
                    <select class="form-control" id="docente_id" wire:model="docente_id">
                        @foreach ($docentes as $docente)
                            <option value="{{ $docente->id }}">
                                {{ $docente->name }} {{ $docente->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" wire:model="nombre">
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <button type="button" wire:click="cerrarModal()" class="btn btn-secondary me-2">Close</button>
            <button type="button" wire:click="manejarGrupo()" wire:loading.attr="disabled" class="btn btn-primary">
                Save changes
            </button>
        </div>
    </div>
</div>
