<div>


    <h1 class="text-2xl font-bold mb-4">Grupos</h1>

    <table class="table-fixed w-full">
        <button wire:click="crearGrupo()" class="bg-green-500 hover:bg-green-600 font-bold py-2 px-4 m-y3">Nuevo Grupo</button>

        @if($modal)
            @include('livewire.nuevo-grupo')
        @endif

        <thead>
            <tr class="bg-indigo-600">
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Curso</th>
                <th class="py-2 px-4">Nombre</th>
                <th class="py-2 px-4">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($grupos as $grupo)
                <tr>
                    <td class="py-2 px-4 border">{{ $grupo->id }}</td>
                    <td class="py-2 px-4 border">{{ $grupo->curso_id }}</td>
                    <td class="py-2 px-4 border">{{ $grupo->nombre }}</td>
                    <td>
                        <button wire:click="editar({{$grupo->id}})">Editar</button>
                        <button wire:click="borrar({{$grupo->id}})">Borrar</button>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div>
