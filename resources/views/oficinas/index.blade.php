<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/templateHeaderFooter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">
</head>

<body>
    <header class="header-outer">
        <div class="header-inner responsive-wrapper">
            <div class="header-logo">
                <img src="{{asset("assets/Icono1.png")}}" />
            </div>
            <nav class="header-navigation">
                <a href="#"></a>
                <a href="{{ route('oficinas.create') }}">Añadir nuevo Gimnasio</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

                <button>Menu</button>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="responsive-wrapper">
            <h1>Gimnasios</h1>
            <ul class="empresas-lista">
                @foreach ($oficinas as $oficina)
                    <li class="empresa">
                        <a href="{{ route('oficinas.show', $oficina->id) }}">{{ $oficina->nombre }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>


    <footer>
        <footer class="footer-outer">
            <div class="footer-inner responsive-wrapper">
                <div class="footer-logo">
                    <img src="{{asset("assets/Icono1.png")}}" />
                </div>
            </div>
        </footer>
</body>

</html>