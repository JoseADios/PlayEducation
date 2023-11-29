<style>
    .cont-modal {
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

    .error-campo {
        font-size: small;
    }
</style>


<div class="d-flex p-2 position-fixed cont-modal">

    <div class="position-fixed mdl p-4" id="modalCreaEst">
        <div class="">
            <div class="d-flex justify-content-between">
                <h5 class="">Crear estudiante</h5>
                <button wire:click="cerrarMdlCrearEst()" type="button" class="btn-close btn-close-white"
                    aria-label="Close"></button>
            </div>
            <div class="">
                <form>
                    <div class="mb-3">

                        <div class="mb-4 position-relative row">
                            <div class="col">
                                <label for="grupo-id" class="col-form-label">Grupo:</label>
                                <select class="form-control" id="grupo-id" wire:model="grupo_id">
                                    <option value="null">Elija una opción</option>

                                    @foreach ($grupos as $grupo)
                                        <option value="{{ $grupo->id }}" wire:key="grupo-{{ $grupo->id }}">
                                            {{ $grupo->nombre }}</option>
                                    @endforeach

                                </select>
                                @error('grupo_id')
                                    <span class="ml-1 text-danger error-campo position-absolute">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="genero" class="col-form-label">Genero:</label>
                                <select class="form-control" id="genero" wire:model="genero">
                                    <option >Elija una opción</option>
                                    <option value="m">Masculino</option>
                                    <option value="f">Femenino</option>
                                </select>
                                @error('genero')
                                    <span class="ml-1 text-danger error-campo position-absolute">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 position-relative">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" wire:model="nombre">
                            @error('nombre')
                                <span class="ml-1 text-danger error-campo position-absolute">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 position-relative">
                            <label for="apellido" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" wire:model="apellido">
                            @error('apellido')
                                <span class="ml-1 text-danger error-campo position-absolute">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 position-relative">
                            <label for="usuario" class="col-form-label">Usuario:</label>
                            <input type="email" class="form-control" id="usuario" wire:model="usuario">
                            @error('usuario')
                                <span class="ml-1 text-danger error-campo position-absolute">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button type="button" wire:click="cerrarMdlCrearEst()" class="btn btn-sec mb-0">Close</button>
                <button type="button" wire:click="guardarEst()" class="btn btn-prim mb-0">Save changes</button>
            </div>
        </div>
    </div>

</div>

<style>
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
