<style>
    .logros-cont {
        overflow-x: scroll;
        height: 6rem;
        min-height: 6rem;
    }

    img {
        height: 3rem;
        width: auto;
    }

    .titulo {
        font-size: small;
    }

    .no-logros {
        align-self: center;
        position: relative;
        left: 35%;
    }

    /* Estilo de la barra de desplazamiento */
    .logros-cont::-webkit-scrollbar {
        width: 6px;
        height: .6rem;
        /* Ancho de la barra de desplazamiento */
    }

    /* Estilo del riel de la barra de desplazamiento */
    .logros-cont::-webkit-scrollbar-track {
        background-color: #f1f1f1;
        /* Color del riel de la barra de desplazamiento */
    }

    /* Estilo del pulgar de la barra de desplazamiento */
    .logros-cont::-webkit-scrollbar-thumb {
        background-color: #b4b2b2;
        /* Color del pulgar de la barra de desplazamiento */
        border-radius: 6px;
        /* Bordes redondeados del pulgar */
    }

    /* Estilo del pulgar de la barra de desplazamiento al pasar el ratón sobre él */
    .logros-cont::-webkit-scrollbar-thumb:hover {
        background-color: #929292;
        /* Cambia el color del pulgar al pasar el ratón sobre él */
    }
</style>

<div>
    <div class="d-flex logros-cont">
        @foreach ($logros as $logro)
            <div class="mx-2 d-flex flex-column align-items-center mt-2">
                <img title="{{ $logro->descripcion }}" src="images/logros/{{ $logro->ruta_imagen }}"
                    alt="{{ $logro->titulo }}">
                <p class="text-center titulo">{{ $logro->titulo }}</p>
            </div>
        @endforeach

        @if (count($logros) == 0)
            <p class="text-center titulo no-logros">Aún no hay logros</p>
        @endif
    </div>
</div>
