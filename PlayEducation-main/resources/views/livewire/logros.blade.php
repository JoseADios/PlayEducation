<style>
    .logros-cont {
        overflow-x: scroll;
        height: 7.6rem;
    }

    img {
        height: 3rem;
        width: auto;
    }

    .titulo {
        font-size: smaller;
    }

    .no-logros {
        align-self: center;
        position: relative;
        left: 35%;
    }

    .logro{
        padding: .5rem;
        box-shadow: #0ec7a724 2px 2px 12px 3px;
        border-radius: .5rem;
        width: 6rem;
    }

    .logros-cont::-webkit-scrollbar {
        width: 6px;
        height: .6rem;
    }

    .logros-cont::-webkit-scrollbar-track {
        background-color: #f1f1f1;
        /* Color del riel de la barra de desplazamiento */
    }

    .logros-cont::-webkit-scrollbar-thumb {
        background-color: #b4b2b2;
        /* Color del pulgar de la barra de desplazamiento */
        border-radius: 6px;
        /* Bordes redondeados del pulgar */
    }

    .logros-cont::-webkit-scrollbar-thumb:hover {
        background-color: #929292;
    }
</style>

<div>
    <div class="d-flex logros-cont pb-1">
        @foreach ($logros as $logro)
            <div class="logro mx-2 d-flex flex-column align-items-center justify-content-between mt-2">
                <img title="{{ $logro->descripcion }}" src="images/logros/{{ $logro->ruta_imagen }}.png"
                    alt="{{ $logro->titulo }}">
                <p class="text-center titulo mb-0">{{ $logro->titulo }}</p>
            </div>
        @endforeach

        @if (count($logros) == 0)
            <p class="text-center titulo no-logros">Aún no hay logros</p>
        @endif
    </div>
</div>
