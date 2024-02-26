<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h1>Hola este es el componente de prueba</h1>

    <p>Mirame</p>

    @if (session()->has('message'))
        <div class="mx-4 mb-0 alert alert-success fade show text-center" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif

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
