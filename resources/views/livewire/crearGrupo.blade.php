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
        <div class="d-flex justify-content-between">
            <h5 class="">Crear Grupos</h5>
            <button wire:click="cerrarModal()" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
        </div>
        <div class="mt-3">
            <form>
                <div class="mb-4">
                    <label for="docente_id" class="col-form-label">Docente:</label>
                    <select class="form-control" id="docente_id" wire:model="docente_id">
                        <option value="{{ auth()->user()->id }}">
                            {{ auth()->user()->name }} {{ auth()->user()->last_name }}
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" wire:model="nombre">
                </div>

                <!-- Nuevo campo: Contraseña Temporal -->
                <div class="mb-3">
                    <label for="password_temp" class="col-form-label">Contraseña Temporal:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password_temp" wire:model="password_temp">
                        <button type="button" class="btn btn-outline-secondary" wire:click="togglePasswordVisibility">
                            <!-- Icono de ojo -->
                            @if ($showPassword)
                                <i class="fas fa-eye"></i>
                            @else
                                <i class="fas fa-eye-slash"></i>
                            @endif
                        </button>
                    </div>
                </div>

                <!-- Nuevo campo: Fecha de Expiración -->
                <div class="mb-3">
                    <label for="fecha_expiracion" class="col-form-label">Fecha de Expiración:</label>
                    <input type="datetime-local" class="form-control" id="fecha_expiracion" wire:model="fecha_expiracion">
                </div>


                <!-- Nuevo campo: Descripción -->
                <div class="mb-3">
                    <label for="descripcion" class="col-form-label">Descripción:</label>
                    <textarea class="form-control" id="descripcion" wire:model="descripcion"></textarea>
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <button type="button" wire:click="cerrarModal()" class="btn btn-secondary me-2">Cerrar</button>
            <button type="button" wire:click="guardar()" class="btn btn-primary">Salvar Cambios</button>
        </div>
    </div>
</div>
