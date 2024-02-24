<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h1>Hola este es el componente de prueba</h1>

    <p>Mirame</p>

    <input onclick="passData()" type="button" value="Jalar data">
    <input id="inpt" type="text" value="">
    <textarea name="" id="text-a" cols="30" rows="10">{{ $prueba }}</textarea>

    <script>
        function passData() {
            let el = document.getElementById('inpt').value

            @this.setData(el)

            let pp = @this.prueba

            console.log(el);
        }
    </script>
</div>
