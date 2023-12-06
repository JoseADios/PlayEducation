{{-- <div>
    <form method="POST" action="/login-estudiante">
        @csrf
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
        @endif
        <button type="submit">Iniciar sesión</button>
    </form>
</div> --}}


<head>
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1') }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/soft-ui-dashboard.js') }}"></script>
</head>

<nav
    class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('/') }}">
            Play Education
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <a href="/login"
                        class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Maestros</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{ __('Estudiantes') }}</h3>
                            <p class="mb-0">{{ __('Inicio de sesión') }}<br></p>
                        </div>
                        <div class="card-body">
                            <form action="/login-estudiante" method="POST" role="form text-left">
                                @csrf
                                <div class="mb-3">
                                    <label for="usuario">{{ __('Usuario') }}</label>
                                    <div class="@error('usuario')border border-danger rounded-3 @enderror">
                                        <input id="usuario" type="text" class="form-control" placeholder="usuario"
                                            aria-label="usuario" name="usuario" aria-describedby="usuario-addon">
                                    </div>
                                    @error('usuario')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Contraseña') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input id="password" name="password" type="password" class="form-control"
                                            placeholder="Password" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if ($errors->any())
                                    <div class="text-danger">
                                        {{ $errors->first('error') }}
                                    </div>
                                @endif
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Iniciar sesion') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-2 text-sm mx-auto">
                                {{ __(' No sabes tu cuenta?') }}
                            <div class="text-info text-gradient font-weight-bold">
                                {{ __('Pide los datos a tu maestro') }}</div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                            style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
