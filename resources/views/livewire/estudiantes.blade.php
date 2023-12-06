<div class="d-flex flex-column" style="overflow-x: hidden">
    <div class="row">
        <div class="col-12">
            @if ($modalCrearEst)
                @include('livewire.crearEstudiante')
            @endif
            @if ($modalEditarEst)
                @include('livewire.actualizarEstudiante')
            @endif
            @if ($modalEliminarEst)
                @include('livewire.eliminarEstudiante')
            @endif
            @if ($modalVerPuntuaciones)
                <div class="position-fixed mdl p-4 d-flex justify-content-center align-items-center" id="modalverPunts">
                    <div class="body-mdl p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="">Historial de puntuaciones</h5>
                            <button wire:click="cerrarMdlVerPuntuaciones()" type="button"
                                class="btn-close btn-close-white" aria-label="Close"></button>
                        </div>
                        <div class="">
                            @livewire('puntuaciones', ['estudiante_id' => $estudiante_id])
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if (session()->has('message'))
                <div class="mx-4 mb-0 alert alert-success fade show text-center" role="alert">
                    <strong>{{ session('message') }}</strong>
                </div>
            @endif
        </div>
    </div>
    <div class="row px-4">
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                    <li class="nav-item cont-radio w-50">
                        <input class="radio-btn" checked type="radio" name="filtro" id="activos"
                            wire:click="verEstActivos()">
                        <label for="activos" class="label-radio ms-1 text-dark py-2 px-3">
                            <i class="fas fa-check me-1"></i>

                            Activos</label>
                    </li>
                    <li class="nav-item cont-radio w-50">
                        <input class="radio-btn" type="radio" name="filtro" id="inactivos"
                            wire:click="verEstInactivos()">
                        <label for="inactivos" class="label-radio ms-1 text-dark py-2 px-3">
                            <i class="fas fa-trash me-1"></i>

                            Eliminados</label>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card my-4 mx-4 pb-4 head-ests">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Todos los estudiantes</h5>
                        </div>
                        <button wire:click="crearEst()" class="btn btn-morado btn-sm mb-0" type="button">+&nbsp;
                            Crear estudiante</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($grupos as $grupo)
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">{{ $grupo->nombre }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nombre
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Apellido
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Fecha de creacion
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Acción
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grupo->estudiantes as $estudiante)
                                        @if ($estudiante->activo == !$estActivos)
                                            @continue
                                        @endif
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">{{ $estudiante->id }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0 custom-cursor"
                                                    wire:click="editarEst({{ $estudiante->id }})">
                                                    {{ $estudiante->nombre }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0 custom-cursor"
                                                    wire:click="editarEst({{ $estudiante->id }})">
                                                    {{ $estudiante->apellido }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $estudiante->usuario }}
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $estudiante->created_at ? $estudiante->created_at->format('j M Y, g:i a') : 'N/A' }}</span>
                                            </td>
                                            @if ($estudiante->activo == 1)
                                                <td class="text-center">
                                                    <a wire:click="abrirMdlVerPuntuaciones({{ $estudiante->id }})"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Puntuaciones">
                                                        <i class="cursor-pointer fas fa-star text-secondary"></i>
                                                    </a>
                                                    <a wire:click="editarEst({{ $estudiante->id }})" class="mx-3"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Editar">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                    <a wire:click="abrirMdlEliminarEst({{ $estudiante->id }})"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Eliminar">
                                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                                    </a>
                                                </td>
                                            @else
                                                <td class="text-center">
                                                    <a wire:click="activarEst({{ $estudiante->id }})"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Eliminar">
                                                        <i class="cursor-pointer fas fa-undo text-secondary"></i>
                                                    </a>
                                                </td>
                                            @endif

                                        </tr>
                                    @endforeach
                                    @if ($grupo->estudiantes->isEmpty())
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">No hay estudiantes en este
                                                    grupo</p>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<style>
    #modalverPunts {
        z-index: 9999 !important;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background-color: #0000001f;
    }

    .body-mdl {
        background-color: white;
        border-radius: 10px;
        width: 60%;
        height: 80%;
        max-height: 80%;
        border: 1px solid #ccc;
        box-shadow: #00000047 0px 0px 79px -7px;
    }

    .head-ests {
        box-shadow: 0 20px 27px 0 #ac26c32d;
    }

    .btn-morado {
        background-color: #ac26c3;

        color: white;
    }

    .btn-morado:hover {
        background-color: #ac26c3;
        color: white;
    }

    .custom-cursor:hover {
        color: #ac26c3;
        cursor: pointer;
    }

    .radio-btn {
        display: none;
    }

    /* si el radio btn esta activado se cambia el fondo del elemento padre */
    .radio-btn:checked+label {
        background-color: white;
        box-shadow: 0px 0px 10px 0px #1e1ab747;
        border-radius: .5rem;
    }

    .label-radio {
        width: 100%;
        transition: background-color 0.4s ease, box-shadow 0.4s ease;
    }
</style>
