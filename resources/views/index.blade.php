<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Play Education</title>
    <link href="{{ asset('assets/css/soft-ui-dashboard.css') }}" rel="stylesheet">
    {{-- fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    {{-- icons --}}
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet">
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/soft-ui-dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer=""></script>
    @livewireStyles

    <style>
        :root {
            --color-azul: #4b68e6;
            --color-amarillo: #fec200;
            --color-rojo: #f73861;
            --color-turquesa: #0ec7a7;
            --color-verde: #87c92b;
            --color-morado: #ac26c3;
            --color-naranja: #fb6f1a;
        }

        body {
            background-color: #f5f6f8;
        }

        .btn-estud {
            background-color: var(--color-turquesa);
            border-color: var(--color-turquesa);
        }

        .btn-estud:hover {
            background-color: var(--color-turquesa);
            border-color: var(--color-turquesa);
        }

        .btn-estud:focus {
            background-color: var(--color-turquesa);
            border-color: var(--color-turquesa);
        }

        .btn-maestro {
            background-color: var(--color-verde);
            border-color: var(--color-verde);
        }

        .btn-maestro:hover {
            background-color: var(--color-verde);
            border-color: var(--color-verde);
        }

        .btn-maestro:focus {
            background-color: var(--color-verde);
            border-color: var(--color-verde);
        }

        .btn-estud,
        .btn-maestro {
            box-shadow: none !important;
            text-transform: none !important;
            font-weight: 600 !important;
            font-size: .9rem !important;
        }

        .play-edu {
            color: var(--color-azul);
            font-weight: bolder;
        }

        .nav-link {
            color: var(--color-azul) !important;
            font-weight: 600 !important;
            font-size: 1.1rem !important;
        }

        .nav-link:hover {
            color: var(--color-azul) !important;
            font-weight: bolder !important;
        }

        .cont-sects {
            width: 100%;
            overflow: hidden;
        }

        .cover-img {
            position: absolute;
            width: 100%;
            height: 80vh;
            background-color: rgba(0, 0, 0, .5);
        }

        .img-niños {
            width: 100%;
            height: 80vh;
            object-fit: cover;
        }

        .cont-estudiantes {
            height: 80vh;
        }

        .encabezado-txt {
            color: white;
            font-size: 4rem;
            font-weight: lighter;
        }

        .btn-registrarse {
            background-color: var(--color-azul);
            border-color: var(--color-azul);
            box-shadow: none !important;
        }

        .btn-registrarse:hover {
            background-color: var(--color-morado);
            border-color: var(--color-morado);
            font-weight: bolder;
            box-shadow: none !important;
        }

        .cover-img-2 {
            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, #f5f6f8 0%, rgba(130, 185, 255, 0) 25%, rgba(8, 86, 186, 0) 100%);
        }

        .enc-2 {
            color: var(--color-azul);
        }

        .title-3{
            color: var(--color-morado);
        }

        .btn-mat {
            background-color: var(--color-azul);
            border-color: var(--color-azul);
        }

        .btn-mat:hover {
            background-color: var(--color-azul);
            border-color: var(--color-azul);
        }

        .btn-mat:focus {
            background-color: var(--color-azul);
            border-color: var(--color-azul);
        }

        .btn-lit {
            background-color: var(--color-amarillo);
            border-color: var(--color-amarillo);
        }

        .btn-lit:hover {
            background-color: var(--color-amarillo);
            border-color: var(--color-amarillo);
        }

        .btn-lit:focus {
            background-color: var(--color-amarillo);
            border-color: var(--color-amarillo);
        }

        .btn-soc {
            background-color: var(--color-rojo);
            border-color: var(--color-rojo);
        }

        .btn-soc:hover {
            background-color: var(--color-rojo);
            border-color: var(--color-rojo);
        }

        .btn-soc:focus {
            background-color: var(--color-rojo);
            border-color: var(--color-rojo);
        }

        .btn-nat {
            background-color: var(--color-turquesa);
            border-color: var(--color-turquesa);
        }

        .btn-nat:hover {
            background-color: var(--color-turquesa);
            border-color: var(--color-turquesa);
        }

        .btn-nat:focus {
            background-color: var(--color-turquesa);
            border-color: var(--color-turquesa);
        }

        .btn-log {
            background-color: var(--color-verde);
            border-color: var(--color-verde);
        }

        .btn-log:hover {
            background-color: var(--color-verde);
            border-color: var(--color-verde);
        }

        .btn-log:focus {
            background-color: var(--color-verde);
            border-color: var(--color-verde);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid my-2">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="../assets/img/logo-ct.png" alt="Bootstrap" width="30" height="24">
                <h4 class="ps-3 play-edu mb-0">Play Education</h4>
            </a>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Juegos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nosotros</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <a class="btn btn-estud btn-primary mx-4 mb-0" href="#" type="submit">Estudiante</a>
                <a class="btn btn-maestro btn-secondary mb-0" href="/dashboard" type="submit">Maestro</a>
            </div>
        </div>
    </nav>
    {{-- contenedor con imagen de niños de fondo --}}
    <div class="">
        <div class="cont-sects">
            {{-- Principal --}}
            <div class="col p-0 cont-estudiantes">
                <div class="cover-img"></div>
                <div class="position-absolute p-8">
                    <p class="encabezado-txt text-uppercase">Descubre el Mundo del <br> <strong>Aprendizaje
                            Interactivo</strong> </p>
                    <a class="btn mt-4 btn-lg btn-registrarse btn-primary mb-0" href="#" type="submit">Registrate
                        aqui</a>
                </div>
                <img class="img-niños" src="/images/home/niños-estudiando.jpg" alt="Niños estudiando" class="w-100">
            </div>

            {{-- Breve descripcion --}}
            <div class="col p-0">
                {{-- contenedor que tenga texto a la izquierda y una imagen a la derecha bootstrap --}}
                <div class="cont-img2 position-absolute d-flex justify-content-end">
                    <div class="cover-img-2 w-40 position-absolute r-0 h-100"></div>
                    <img src="/images/home/niños-estudiando.jpg" alt="Niños estudiando" class="w-40 img-degradado">
                </div>
                <div class="p-4 pt-6 w-60">
                    <h1 class="enc-2">Donde la Educación se Encuentra con la Diversión</h1>

                    <p class="mt-4 fw-semibold">Bienvenido a Aprendiendo Jugando, donde la educación se encuentra con la
                        diversión.
                        Ofrecemos juegos educativos interactivos diseñados para inspirar la curiosidad y el amor por el
                        aprendizaje en los niños.</p>
                    <p class="fw-semibold ">Desde emocionantes desafíos matemáticos hasta fascinantes juegos de lógica,
                        nuestra plataforma está diseñada para estimular la mente de los más pequeños mientras se
                        divierten.</p>
                </div>
            </div>

            {{-- Categorias de juegos --}}
            <div class="col mt-2 p-2">
                <div class="px-4 pb-0 enc-3">
                    <h1 class="title-3">Categorías de juegos</h1>
                </div>
                <div class="container w-100 text-center">
                    <div class="row row-cols-5 justify-content-center d-flex align-items-stretch">
                        <div class="col">
                            <div class="card mt-4">
                                <img src="/images/home/niños-estudiando.jpg" class="card-img-top"
                                    alt="Imagen de Matemáticas">
                                <div class="card-body">
                                    <h5 class="card-title">Matemáticas</h5>
                                    <p class="card-text">Descubre juegos matemáticos divertidos para niños. Aprende
                                        sumas, restas y más de manera interactiva.</p>
                                    <a href="#" class="btn btn-primary btn-mat">Entrar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mt-4">
                                <img src="/images/home/niños-estudiando.jpg" class="card-img-top"
                                    alt="Imagen de Literatura">
                                <div class="card-body">
                                    <h5 class="card-title">Literatura</h5>
                                    <p class="card-text">Explora juegos educativos que fomentan el dominio del
                                        vocabulario, gramática y más de manera divertida.</p>
                                    <a href="#" class="btn btn-primary btn-lit">Entrar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mt-4">
                                <img src="/images/home/niños-estudiando.jpg" class="card-img-top"
                                    alt="Imagen de Ciencias Sociales">
                                <div class="card-body">
                                    <h5 class="card-title">Ciencias Sociales</h5>
                                    <p class="card-text">Viaja por el mundo explorando la geografía e historia con
                                        juegos
                                        educativos fascinantes.</p>
                                    <a href="#" class="btn btn-primary btn-soc">Entrar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mt-4">
                                <img src="/images/home/niños-estudiando.jpg" class="card-img-top"
                                    alt="Imagen de Ciencias Naturales">
                                <div class="card-body">
                                    <h5 class="card-title">Ciencias Naturales</h5>
                                    <p class="card-text">Explora el mundo natural con juegos educativos. Biología,
                                        ecología y más para despertar la curiosidad.</p>
                                    <a href="#" class="btn btn-primary btn-nat">Entrar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mt-4">
                                <img src="/images/home/niños-estudiando.jpg" class="card-img-top"
                                    alt="Imagen de Lógica">
                                <div class="card-body">
                                    <h5 class="card-title">Lógica</h5>
                                    <p class="card-text">Desarrolla habilidades lógicas con acertijos y rompecabezas.
                                        Estimula la mente de los jugadores jóvenes.</p>
                                    <a href="#" class="btn btn-primary btn-log">Entrar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Acerca de nosotros --}}
            <div class="col p-0">
                <!-- Contenedor con texto a la izquierda e imagen a la derecha -->
                <div class="p-4 pt-6 w-60">
                    <h1 class="enc-2">Sobre Nosotros</h1>
                    <p class="mt-4 fw-semibold">Bienvenido a Aprendiendo Jugando, donde la educación se encuentra con la diversión. Ofrecemos juegos educativos interactivos diseñados para inspirar la curiosidad y el amor por el aprendizaje en los niños.</p>
                    <p class="fw-semibold ">Desde emocionantes desafíos matemáticos hasta fascinantes juegos de lógica, nuestra plataforma está diseñada para estimular la mente de los más pequeños mientras se divierten.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
