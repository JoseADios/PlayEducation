<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    :root {
        --color-azul: #4b68e6;
        --color-amarillo: #fec200;
        --color-rojo: #f73861;
        --color-turquesa: #0ec7a7;
        --color-verde: #87c92b;
        --color-morado: #87c92b;
        --color-naranja: #fb6f1a;
    }

    .navbar {
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.363);
        border-radius: 0px 0px 10px 10px;
    }

    .btn-primary {
        background-color: var(--color-azul);
        border-color: var(--color-azul);
    }

    .btn-primary:hover {
        background-color: var(--color-azul);
        border-color: var(--color-azul);
    }

    .btn-secondary {
        background-color: var(--color-amarillo);
        border-color: var(--color-amarillo);
    }

    .btn-secondary:hover {
        background-color: var(--color-amarillo);
        border-color: var(--color-amarillo);
    }

</style>

<body>
    <nav class="navbar py-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="../assets/img/logo-ct.png" alt="Bootstrap" width="30" height="24">
                Play Education
            </a>
            <div class="">
                <a class="btn btn-secondary" href="/dashboard" type="submit">Maestro</a>
                <button class="btn btn-primary mx-4" type="submit">Estudiante</button>
            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
