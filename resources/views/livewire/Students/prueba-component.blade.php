<div>

    <h1>Este es un componente de prueba</h1>

    <p>Para verificar cual es el problema</p>


    @auth
    <script>
        console.log('Usuario autenticado');
    </script>
    @endauth

    @guest
    <script>
        console.log('Usuario no autenticado');
    </script>
    @endguest



</div>
