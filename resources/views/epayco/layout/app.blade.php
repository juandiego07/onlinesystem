<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('./css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title') | ePayco</title>
</head>

<body class="container-fluid bg-light">
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                {{-- <a class="navbar-brand" href="#">Logo ePayco</a> --}}
                <img class="logoEpayco ms-2" src="{{ asset('./img/03_gris.svg') }}" alt="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menú</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            @if (Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('customer') }}">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('invoice') }}">Facturas</a>
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <a class="nav-link" href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">Cerrar
                                            sesión</a>
                                    </form>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page"
                                        href="{{ route('home') }}">Iniciar sesión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page"
                                        href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link" href="https://epayco.com/recaudos/" target="_blank">Planes
                                    Recaudo</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid container-md">
        @yield('main')
    </main>
    {{-- <footer>
        <div class="d-flex justify-content-center">
            <h6>copyright</h6>
        </div>
    </footer> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap');
    </style>
</body>

</html>
