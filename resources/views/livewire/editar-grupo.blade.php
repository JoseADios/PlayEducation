<!-- resources/views/editar-grupo.blade.php -->

<div>
    <form wire:submit.prevent="actualizarGrupo">
        <input wire:model="nombreGrupoEditado" type="text" placeholder="Nuevo nombre del grupo" class="mb-2 px-4 py-2 border rounded">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4">Actualizar</button>
    </form>
</div>
