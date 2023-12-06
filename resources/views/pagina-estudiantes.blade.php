<div class="">
    <h1>Bienvenido estudiante!</h1>
    <form method="POST" action="{{ route('logout-estudiante') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</div>
