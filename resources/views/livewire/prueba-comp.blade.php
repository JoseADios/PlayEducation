<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h1>Hola este es el componente de prueba</h1>

    <p>Mirame</p>

    <input onclick="getData()" type="button" value="Jalar data">
    <input id="inpt" type="text" value="hola">
    <div class="cont"></div>
</div>

<script>
    function getData() {
        let el = document.getElementById('inpt').value;

        console.log(el);
    }
</script>
