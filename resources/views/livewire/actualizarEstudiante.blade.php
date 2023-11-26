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
        width: 95%;
        max-width: 95%;
        height: 90%;
        max-height: 90%;
        border: 1px solid #ccc;
        box-shadow: #00000047 0px 0px 79px -7px;
    }

    .error-campo {
        font-size: small;
    }

    .observaciones {
        overflow-y: auto;
        height: 18rem;
        max-height: 18rem;
        overflow-x: hidden;
    }

    .no-observaciones {
        position: relative;
        top: 50%;
    }
</style>


<div class="d-flex p-2 position-fixed cont-modal">

    <div class="position-fixed mdl p-4" id="modalCreaEst">
        <div class="row">
            <div class="d-flex justify-content-between">
                <h4 class="">Actualizar estudiante</h4>
                <button wire:click="cerrarMdlEditarEst()" type="button" class="btn-close btn-close-white"
                    aria-label="Close"></button>
            </div>
            <div class="col">
                <div class="px-2">
                    <h5>Datos personales</h5>
                    <form>
                        <div class="mb-3">
                            <div class="mb-4 row">
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
                                        <span class="ml-1 text-danger error-campo">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="genero" class="col-form-label">Genero:</label>
                                    <select class="form-control" id="genero" wire:model="genero">
                                        <option>Elija una opción</option>
                                        <option value="m">Masculino</option>
                                        <option value="f">Femenino</option>
                                    </select>
                                    @error('genero')
                                        <span class="ml-1 text-danger error-campo">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="nombre" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" wire:model="nombre">
                                @error('nombre')
                                    <span class="ml-1 text-danger error-campo">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="apellido" class="col-form-label">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" wire:model="apellido">
                                @error('apellido')
                                    <span class="ml-1 text-danger error-campo">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="usuario" class="col-form-label">Usuario:</label>
                                <input type="email" class="form-control" id="usuario" wire:model="usuario">
                                @error('usuario')
                                    <span class="ml-1 text-danger error-campo">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col">
                <h5>Observaciones</h5>
                <div class="d-flex flex-column">
                    <div
                        class="col observaciones d-flex flex-column align-items-center mt-3 border rounded-3 px-2 overflow-y-scroll">
                        @foreach ($observaciones as $observacion)
                            <div class="row mt-1 mb-1">
                                <div class="toast show p-2" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header p-1">
                                        <strong class="me-auto">{{ $observacion->titulo }}</strong>
                                        <small
                                            class="text-body-secondary">{{ $observacion->created_at ? $observacion->created_at->diffForHumans() : 'N/A' }}</small>
                                    </div>
                                    <div class="toast-body border-top p-1">
                                        <i>{{ $observacion->descripcion }}</i>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if ($observaciones->isEmpty())
                            <p class="text-xs font-weight-bold mb-0 no-observaciones">No hay observaciones</p>
                        @endif
                    </div>
                    <div class="my-4 row d-flex justify-content-between">
                        <div class="col-9">
                            <textarea class="form-control" rows="2" id="observacion" wire:model="observacion" placeholder="Ingrese una observación"
                                id="floatingTextarea" style="resize: none"></textarea>
                            @error('observacion')
                                <span class="ml-1 text-danger error-campo">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="button" wire:click="guardarObservacion()"
                                class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h5>Puntuaciones</h5>
                <div class="px-2"></div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="button" wire:click="cerrarMdlEditarEst()" class="btn btn-secondary mb-0">Close</button>
                <button type="button" wire:click="guardarEstEditado()" class="btn btn-primary mb-0">Save
                    changes</button>
            </div>
        </div>

    </div>

</div>
