<style>
    .logros-cont {
        overflow-x: scroll;
    }

    img {
        height: 3rem;
        width: auto;
    }

    .titulo {
        font-size: small;
    }

    /* Estilo de la barra de desplazamiento */
    #logros-cont::-webkit-scrollbar {
        width: 12px;
        /* Ancho de la barra de desplazamiento */
    }

    /* Estilo del riel de la barra de desplazamiento */
    #logros-cont::-webkit-scrollbar-track {
        background-color: #f1f1f1;
        /* Color del riel de la barra de desplazamiento */
    }

    /* Estilo del pulgar de la barra de desplazamiento */
    #logros-cont::-webkit-scrollbar-thumb {
        background-color: #888;
        /* Color del pulgar de la barra de desplazamiento */
        border-radius: 6px;
        /* Bordes redondeados del pulgar */
    }

    /* Estilo del pulgar de la barra de desplazamiento al pasar el ratón sobre él */
    #logros-cont::-webkit-scrollbar-thumb:hover {
        background-color: #555;
        /* Cambia el color del pulgar al pasar el ratón sobre él */
    }
</style>

<div>
    <div class="d-flex logros-cont">
        @foreach ($logros as $logro)
            <div class="mx-1 d-flex flex-column align-items-center">
                <img title="{{ $logro->descripcion }}" src="images/logros/{{ $logro->ruta_imagen }}"
                    alt="{{ $logro->titulo }}">
                <p class="text-center titulo">{{ $logro->titulo }}</p>
            </div>
        @endforeach
        @foreach ($logros as $logro)
            <div class="mx-1 d-flex flex-column align-items-center">
                <img title="{{ $logro->descripcion }}" src="images/logros/{{ $logro->ruta_imagen }}"
                    alt="{{ $logro->titulo }}">
                <p class="text-center titulo">{{ $logro->titulo }}</p>
            </div>
        @endforeach
        @foreach ($logros as $logro)
            <div class="mx-1 d-flex flex-column align-items-center">
                <img title="{{ $logro->descripcion }}" src="images/logros/{{ $logro->ruta_imagen }}"
                    alt="{{ $logro->titulo }}">
                <p class="text-center titulo">{{ $logro->titulo }}</p>
            </div>
        @endforeach
        @foreach ($logros as $logro)
            <div class="mx-1 d-flex flex-column align-items-center">
                <img title="{{ $logro->descripcion }}" src="images/logros/{{ $logro->ruta_imagen }}"
                    alt="{{ $logro->titulo }}">
                <p class="text-center titulo">{{ $logro->titulo }}</p>
            </div>
        @endforeach
        @foreach ($logros as $logro)
            <div class="mx-1 d-flex flex-column align-items-center">
                <img title="{{ $logro->descripcion }}" src="images/logros/{{ $logro->ruta_imagen }}"
                    alt="{{ $logro->titulo }}">
                <p class="text-center titulo">{{ $logro->titulo }}</p>
            </div>
        @endforeach
    </div>
</div>
