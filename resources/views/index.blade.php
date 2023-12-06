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
            background: linear-gradient(90deg, #f5f6f8 0%, #f5f6f8 5%, #0856ba00 100%);
        }

        .enc-2 {
            color: var(--color-azul);
        }

        .title-3 {
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

        .cont-img-about {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
        }

        .cont-img-interactiva{
            background-image: url('/images/home/educacion-interactiva.jpg');

        }

        .color-azul {
            color: var(--color-azul);
        }

        .color-amarillo {
            color: var(--color-amarillo);
        }

        .color-rojo {
            color: var(--color-rojo);
        }

        .color-turquesa {
            color: var(--color-turquesa);
        }

        .color-verde {
            color: var(--color-verde);
        }

        .color-morado {
            color: var(--color-morado);
        }

        .color-naranja {
            color: var(--color-naranja);
        }

        .card:hover {
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        }

        .cont-about-1 {
            border: #0ec7a773 solid 2px;
            border-radius: 2rem;
            overflow: hidden;
        }
        .cont-about-2 {
            border: #fb6f1aa3 solid 2px;
            border-radius: 2rem;
            overflow: hidden;
        }
        .cont-about-3 {
            border: #ac26c3ab solid 2px;
            border-radius: 2rem;
            overflow: hidden;
        }

        footer{
            background-color: #e4e8f3;;
            border-top: 1px solid #e3e6ef;
        }

        .list-unstyled > li > a{
            color: var(--color-azul);
        }

        .cont-img-breve-desc{
            background-image: url('/images/home/niña-con-movil.avif');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
        }

        .cont-img-mat{
            background-image: url('/images/home/juegos-matematicas.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 10rem;
        }

        .cont-img-lit{
            background-image: url('/images/home/juegos-literatura.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 10rem;
        }

        .cont-img-soc{
            background-image: url('/images/home/juegos-sociales.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 10rem;
        }

        .cont-img-nat{
            background-image: url('/images/home/juegos-naturales.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 10rem;
        }

        .cont-img-log{
            background-image: url('/images/home/juegos-logica.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 10rem;
        }

        .cont-variedad-juegos{
            background-image: url('/images/home/variedad-juegos.jpeg');
        }

        .cont-seguimiento{
            background-image: url('/images/home/graficos.jpg');
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid my-2">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="../assets/img/logo-ct.png" alt="Bootstrap" width="70" height="70">
                <h4 class="ps-3 play-edu mb-0">Play Education</h4>
            </a>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Juegos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categorias-juegos">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">Sobre nosotros</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <a class="btn btn-estud btn-primary mx-4 mb-0" href="/ruta-estudiante" type="submit">Estudiante</a>
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
                    <a class="btn mt-4 btn-lg btn-registrarse btn-primary mb-0" href="/sign-up" type="submit">Registrate
                        aqui</a>
                </div>
                <img class="img-niños" src="/images/home/niños-estudiando.jpg" alt="Niños estudiando" class="w-100">
            </div>

            {{-- Breve descripcion --}}
            <div class="row p-0" id="breve-descripcion">
                {{-- contenedor que tenga texto a la izquierda y una imagen a la derecha bootstrap --}}
                <div class="col ms-4 p-4 pt-6 w-60">
                    <h1 class="enc-2">Donde la Educación se Encuentra con la Diversión</h1>

                    <p class="mt-4 pe-4 fw-semibold fs-5">Bienvenido a Play Education, donde la educación se encuentra con la
                        diversión.
                        Ofrecemos juegos educativos interactivos diseñados para inspirar la curiosidad y el amor por el
                        aprendizaje en los niños.</p>

                </div>
                <div class="cont-img2 col d-flex justify-content-end position-relative">
                    <div class="cont-img-breve-desc"></div>
                    <div class="cover-img-2 position-absolute w-100 h-100"></div>
                </div>
            </div>

            {{-- Categorias de juegos --}}
            <div class="col mt-6 p-2">
                <div class="px-4 pb-4 enc-3">
                    <h1 class="title-3" id="categorias-juegos">Categorías</h1>
                </div>
                <div class="container w-100 text-center">
                    <div class="row row-cols-5 justify-content-center d-flex align-items-stretch">

                        <div class="col">
                            <div class="card mt-4">
                                <div class="card-img-top cont-img-mat">
                                </div>
                                {{-- <img src="/images/home/juegos-matematicas.jpg" class="card-img-top"
                                    alt="Imagen de Matemáticas"> --}}
                                <div class="card-body">
                                    <h5 class="card-title">Matemáticas</h5>
                                    <p class="card-text">Sumas, restas y más. ¡Aprende jugando con nuestros juegos!</p>
                                    <a href="/sumar" class="btn btn-primary btn-mat">Entrar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mt-4">
                                <div class="card-img-top cont-img-lit">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Literatura</h5>
                                    <p class="card-text">Domina vocabulario y gramática con nuestros divertidos juegos.</p>
                                    <a href="/animales" class="btn btn-primary btn-lit">Entrar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mt-4">
                                <div class="card-img-top cont-img-soc">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Ciencias Sociales</h5>
                                    <p class="card-text">Explora geografía e historia con juegos fascinantes.</p>
                                    <a href="#" class="btn btn-primary btn-soc">Entrar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mt-4">
                                <div class="card-img-top cont-img-nat">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Ciencias Naturales</h5>
                                    <p class="card-text">Descubre biología, ecología y más en nuestros juegos.</p>
                                    <a href="#" class="btn btn-primary btn-nat">Entrar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mt-4">
                                <div class="card-img-top cont-img-log">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Lógica</h5>
                                    <p class="card-text">Desarrolla habilidades lógicas con acertijos y rompecabezas.
                                    </p>
                                    <a href="/TicTac" class="btn btn-primary btn-log">Entrar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{-- Acerca de nosotros --}}
            <div class="col p-0">

                <div class="px-6 pt-6">
                    <h1 class="enc-2" id="about-us">Sobre Nosotros</h1>
                    <div class="d-flex flex-column">
                        <div class="row my-4 cont-about-1">
                            <div class="col-6 py-4 px-8">
                                <h2 class="mt-4 color-turquesa">Educación Interactiva</h2>
                                <p class="fw-semibold fs-5">En Play Education, nos esforzamos por ofrecer una
                                    experiencia
                                    educativa
                                    interactiva y envolvente para niños en edad preescolar y primer grado. Creemos que
                                    el
                                    aprendizaje es más efectivo cuando es divertido y emocionante.</p>
                            </div>
                            <div class="col-6 p-0">
                                <div class="cont-img-about cont-img-interactiva">
                                </div>
                            </div>
                        </div>

                        <div class="row my-4 align-self-end cont-about-2">
                            <div class="col-6 p-0">
                                <div class="cont-img-about cont-variedad-juegos"></div>
                            </div>
                            <div class="col-6 py-4 px-8">
                                <h2 class="mt-4 color-naranja">Variedad de Juegos Educativos</h2>
                                <p class="fw-semibold fs-5">Explora nuestra amplia variedad de juegos educativos diseñados
                                    para
                                    abordar
                                    diversas áreas temáticas. Desde matemáticas y lenguaje hasta ciencias sociales y
                                    naturales,
                                    cada
                                    juego tiene un propósito educativo específico y está adaptado a las necesidades de
                                    los
                                    niños
                                    en
                                    su proceso de aprendizaje.</p>
                            </div>
                        </div>

                        <div class="row my-4 cont-about-3">
                            <div class="col-6 py-4 px-8">
                                <h2 class="mt-4 title-3">Seguimiento del Progreso</h2>
                                <p class="fw-semibold fs-5">Los maestros y los padres pueden realizar un seguimiento
                                    del
                                    progreso de
                                    los
                                    estudiantes a través de nuestra plataforma. Ofrecemos herramientas
                                    intuitivas
                                    que
                                    permiten
                                    evaluar el rendimiento de los niños, identificar áreas de mejora y celebrar
                                    los
                                    logros
                                    educativos.</p>
                            </div>
                            <div class="col-6 p-0">
                                <div class="cont-img-about cont-seguimiento">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- footer --}}

    <footer class="footer py-4">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/" class="color-azul fs-5 font-weight-bold mb-0 ">Play Education</a>
                    <ul class="list-unstyled d-flex flex-row mb-0">
                        <li class="me-3">
                            <a class="" href="/">Inicio</a>
                        </li>
                        <li class="me-3">
                            <a class="" href="#">Juegos</a>
                        </li>
                        <li class="me-3">
                            <a class="" href="#categorias-juegos">Categorias</a>
                        </li>
                        <li class="me-3">
                            <a class="" href="#about-us">Sobre nosotros</a>
                        </li>
                    </ul>
                </div>

            </div>
            <hr class="my-4 color-azul">
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <p class="text-sm color-azul font-weight-bold mb-0">© 2023 Play Education
                    </p>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled d-flex flex-row justify-content-center justify-content-lg-end mb-0">
                        <li class="me-3">
                            <a class="" href="#">
                                <i class="fab fa-facebook-f font-size-md mr-2"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a class="" href="#">
                                <i class="fab fa-twitter font-size-md mr-2"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a class="" href="#">
                                <i class="fab fa-instagram font-size-md mr-2"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a class="" href="#">
                                <i class="fab fa-pinterest font-size-md mr-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>
