<div>
    <form method="POST" action="/login-estudiante">
        @csrf
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Iniciar sesión</button>
    </form>
</div>
