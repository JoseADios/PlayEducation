<div>
    <h1>Prueba de eventos</h1>
    <h2>{{ $mensaje }}</h2>
    <button id="btn">Enviar evento</button>
</div>

<script>
    let btn = document.getElementById('btn');

    btn.addEventListener('click', () => {
        $wire.dispatch('evento', {mensaje: 'Hola desde el evento'});
});
</script>
