<head>
    <link rel="stylesheet" href="{{ asset('sumar/estilo.css') }}">
</head>

<div>
    <div class=""></div>
    <div class="btn-volver">
        <a href="{{ route('juegos') }}" class="btn btn-primary">Volver</a>
    </div>
    <h1>A SUMAR</h1>
    <div class="contador-container">
        <div id="puntos" class="contador">
            <span class="contador-icon">🌟</span>
            <span class="contador-text">Puntos: 0</span>
        </div>
        <div id="intentos" class="contador">
            <span class="contador-icon">🚀</span>
            <span class="contador-text">Intentos restantes: 3</span>
        </div>
    </div>
    <div class="container">

        <div class="izquierdo" id="izquierdo">
            <div class="container-operacion">
                <span id="suma">9 + 9 =</span>
                <span class="resultado" id="resultado"> 18</span>
            </div>
            <span class="msj" id="msj"></span>
            <div wire:click="guardarPuntuacion()" class="btn-jugar-de-nuevo" id="jugarDeNuevo">Jugar de nuevo</div>
        </div>
        <div class="derecha">
            <span id="op1" class="opcion" onclick="controlarRespuesta(this)">18</span>
            <span id="op2" class="opcion" onclick="controlarRespuesta(this)">17</span>
            <span id="op3" class="opcion" onclick="controlarRespuesta(this)">8</span>
        </div>
    </div>
    <script src="{{ asset('sumar/script.js') }}"></script>
</div>


