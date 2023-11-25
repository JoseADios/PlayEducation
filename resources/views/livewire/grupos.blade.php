{{-- <div>


    <h1 class="text-2xl font-bold mb-4">Grupos</h1>

    <table class="table-fixed w-full">
        <button wire:click="crearGrupo()" class="bg-green-500 hover:bg-green-600 font-bold py-2 px-4 m-y3">Nuevo Grupo</button>

        @if($modal)
            @include('livewire.crearGrupo')
        @endif

        <thead>
            <tr class="bg-indigo-600">
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Docente</th>
                <th class="py-2 px-4">Nombre</th>
                <th class="py-2 px-4">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($grupos as $grupo)
                <tr>
                    <td class="py-2 px-4 border">{{ $grupo->id }}</td>
                    <td class="py-2 px-4 border">{{ $grupo->docente_id }}</td>
                    <td class="py-2 px-4 border">{{ $grupo->nombre }}</td>
                    <td>
                        <button wire:click="editar({{$grupo->id}})">Editar</button>
                        <button wire:click="borrar({{$grupo->id}})">Borrar</button>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div> --}}

<div class="d-flex flex-column" style="overflow-x: hidden">
    <div class="row">
        <div class="col-12">
            @if ($modal)
                @include('livewire.crearGrupo')
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4 pb-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Todos los grupos</h5>
                        </div>
                        <button wire:click="crearGrupo()" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp;
                            Nuevo
                            Grupo</button>
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
                                {{-- <h5 class="mb-0">{{ $docente->docente_id }}</h5> --}}
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
                                            ID Docente
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name
                                        </th>
                                        {{-- <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Last Name
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Creation Date
                                        </th> --}}
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($grupo->users as $grupo_id) --}}
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">{{ $grupo->id }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $grupo->nombre }}</p>
                                            </td>
                                            {{-- <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $estudiante->apellido }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $estudiante->usuario }}</p>
                                            </td>
                                            <td class="text-center"> --}}
                                                {{-- <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $grupo->created_at }}</span>
                                            </td> --}}
                                            <td class="text-center">
                                                <a wire:click="editar({{$grupo->id}})" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit user">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <span wire:click="borrar({{$grupo->id}})">
                                                    <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
