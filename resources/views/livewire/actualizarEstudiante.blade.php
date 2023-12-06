<style>
    :root {
        --color-azul: #4b68e6;
        --color-amarillo: #fec200;
        --color-rojo: #f73861;
        --color-turquesa: #0ec7a7;
        --color-verde: #87c92b;
        --color-morado: #ac26c3;
        --color-naranja: #fb6f1a;
    }

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
        height: 17rem;
        min-height: 17rem;
        max-height: 17rem;
        overflow-x: hidden;
    }

    .no-observaciones {
        position: relative;
        top: 8rem;
    }

    .botns-inf {
        position: absolute;
        bottom: 1.5rem;
    }

    .btn-guardar {
        margin-right: 1.3rem;
    }

    .btn-prim {
        background-color: var(--color-azul);
        border-color: var(--color-azul);
        color: white;
    }

    .btn-prim:hover {
        background-color: var(--color-azul);
        border-color: var(--color-azul);
        color: white;
    }

    .btn-sec {
        background-color: white;
        border-color: var(--color-azul);
        color: var(--color-azul);
    }

    .btn-sec:hover {
        background-color: white;
        border-color: var(--color-azul);
        color: var(--color-azul);
    }

    .btn-tur {
        background-color: var(--color-turquesa);
        border-color: var(--color-turquesa);
        color: white;
    }

    .btn-tur:hover {
        background-color: var(--color-turquesa);
        border-color: var(--color-turquesa);
        color: white;
    }
</style>


<div class="d-flex p-2 position-fixed cont-modal">

    <div class="position-fixed mdl p-4" id="modalCreaEst">
        <div class="row">
            <div class="d-flex justify-content-end">
                <button wire:click="cerrarMdlEditarEst()" type="button" class="btn-close btn-close-white"
                    aria-label="Close"></button>
            </div>
            <div class="col-4 px-3">
                <div class="">
                    <h5>Datos personales</h5>
                    <form>
                        <div class="mb-3">
                            <div class="mb-4 position-relative row">
                                <div class="col">
                                    <label for="grupo-id" class="col-form-label">Grupo:</label>
                                    <select class="form-control" id="grupo-id" wire:model="grupo_id">
                                        <option>Elija una opción</option>

                                        @foreach ($grupos as $grupo)
                                            <option value="{{ $grupo->id }}" wire:key="grupo-{{ $grupo->id }}">
                                                {{ $grupo->nombre }}</option>
                                        @endforeach

                                    </select>
                                    @error('grupo_id')
                                        <span
                                            class="ml-1 text-danger error-campo position-absolute">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="genero" class="col-form-label">Genero:</label>
                                    <select class="form-control" id="genero" wire:model="genero">
                                        <option value="null">Elija una opción</option>
                                        <option value="m">Masculino</option>
                                        <option value="f">Femenino</option>
                                    </select>
                                    @error('genero')
                                        <span
                                            class="ml-1 text-danger error-campo position-absolute">{{ $message }}</span>
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
            </div>
            <div class="col-4 px-3">
                <h5>Observaciones</h5>
                <div class="d-flex flex-column">
                    <div class="col observaciones d-flex flex-column align-items-center mt-3 border rounded-3 px-2 overflow-y-scroll"
                        id="observaciones">
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
                    <div class="mt-1 row d-flex justify-content-between">
                        <div class="col-8">
                            <input placeholder="Título" type="text" class="form-control" id="titulo"
                                wire:model="titulo">
                            @error('titulo')
                                <span class="ml-1 text-danger error-campo position-absolute">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-8">
                            <textarea class="form-control mt-1" rows="2" id="descripcion" wire:model="descripcion" placeholder="Descripcion"
                                id="floatingTextarea" style="resize: none"></textarea>
                            @error('descripcion')
                                <span class="ml-1 text-danger error-campo">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <button type="button" wire:click="guardarObservacion()"
                                class="btn btn-tur">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 px-3">
                <h5>Puntuaciones</h5>
                <div class="col">
                    <div class="row-4">
                        <h6><i>Logros</i></h6>
                        <div wire:ignore class="overflow-hidden">
                            @livewire('logros', ['estudiante_id' => $estudiante_id])
                        </div>
                    </div>
                    <div class="row-8 mt-4">
                        <h6><i>Actividades recientes</i></h6>
                        <div wire:ignore class="overflow-hidden">
                            @livewire('actividades-recientes', ['estudiante_id' => $estudiante_id])
                        </div>
                    </div>
                </div>
            </div>

            <div class="botns-inf d-flex justify-content-between align-items-center">
                <button type="button" wire:click="cerrarMdlEditarEst()" class="btn btn-sec mb-0">Close</button>
                <button type="button" wire:click="guardarEst()" class="btn btn-prim mb-0 btn-guardar">Save
                    changes</button>
            </div>
        </div>

    </div>

</div>

<script>
    var contenedor = document.getElementById('observaciones');
    contenedor.scrollTop = contenedor.scrollHeight;
</script>
