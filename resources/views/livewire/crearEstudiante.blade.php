<style>
    .cont-modal {
        z-index: 101;
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
        border: 1px solid #ccc;
        box-shadow: #00000047 0px 0px 79px -7px;
    }
</style>


<div class="d-flex p-2 position-fixed cont-modal">

    <div class="position-fixed mdl p-4" id="modalCreaEst">
        <div class="">
            <div class="d-flex justify-content-between">
                <h5 class="">{{ $encabezadoModal }}</h5>
                <button wire:click="cerrarMdlCrearEst()" type="button" class="btn-close btn-close-white"
                    aria-label="Close"></button>
            </div>
            <div class="">
                <form>
                    <div class="mb-3">
                        <div class="mb-4">
                            @foreach ($grupos as $grupo)
                                {{$grupo->id}}
                            @endforeach
                            <label for="grupo-id" class="col-form-label">Grupo:</label>
                            <select class="form-control" id="grupo-id" wire:model="grupo_id">
                                <option value="null" >Elija una opción</option>
                                @foreach ($grupos as $grupo)
                                    <option value="{{ $grupo->id }}" wire:key="grupo-{{ $grupo->id }}">
                                        {{ $grupo->nombre }}</option>
                                @endforeach
                                @error('grupo_id')
                                    <span class="ml-1 text-danger">{{ $message }}</span>
                                @enderror

                            </select>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" wire:model="nombre">
                            @error('nombre')
                                <span class="ml-1 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="apellido" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" wire:model="apellido">
                            @error('apellido')
                                <span class="ml-1 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="usuario" class="col-form-label">Usuario:</label>
                            <input type="email" class="form-control" id="usuario" wire:model="usuario">
                            @error('usuario')
                                <span class="ml-1 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button type="button" wire:click="cerrarMdlCrearEst()" class="btn btn-secondary mb-0">Close</button>
                <button type="button" wire:click="guardarEst()" class="btn btn-primary mb-0">Save changes</button>
            </div>
        </div>
    </div>

</div>
