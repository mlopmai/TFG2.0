<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/templateHeaderFooter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/welcome.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <header class="header-outer">
        <div class="header-inner responsive-wrapper">
            <div class="header-logo">
                <img src="{{asset("assets/Icono1.png")}}" />
            </div>
            <nav class="header-navigation">
                <a href="{{ route('inscribirse') }}" class="btn btn-primary">Inscribirse</a>
                <a href="{{ route('sobreNosotros') }}" class="btn btn-primary">Sobre nosotros</a>
                @if (Route::has('login'))
                    <nav class="flex items-center justify-end gap-4">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                                Iniciar sesión
                            </a>

                            <!--@if (Route::has('register'))
                                                                    <a
                                                                        href="{{ route('register') }}"
                                                                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                                                        Registrarse
                                                                    </a>
                                                                @endif-->
                        @endauth
                    </nav>
                @endif
                <a href="#"></a>
            </nav>
        </div>
    </header>

    <main>
        <div id="carouselExampleControls" class="carousel slide mx-auto" style="max-width: 90%; max-height: 80%;"
            data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/pexels-heyho-7031705.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/pexels-leonardho-1552242.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/pexels-victorfreitas-841130.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/pexels-willpicturethis-1954524.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div id="saludo">
            <h2>Bienvenido a Malaga Fit</h2>
            <p>¡Transforma tu vida con nosotros!</p>
            <p>
                En Malaga Fit te ofrecemos mucho más que un espacio para
                entrenar: somos una comunidad dedicada a tu bienestar y a ayudarte a alcanzar tus metas.
            </p>

            <h3>¿Por qué elegirnos?</h3>
            <p>
                Instalaciones modernas y equipadas

                Entrenadores certificados y apasionados

                Clases para todos los niveles y edades

                Ambiente motivador y seguro

                ¡Únete hoy y vive la experiencia Malaga Fit!
            </p>
            <a href="{{ route('inscribirse') }}" class="btn btn-primary">¡Me apunto!</a>
        </div>

        <div id="saludo">
            <h3>Preguntas Frecuentes</h3>

            <h4>¿Necesito experiencia previa para inscribirme?</h4>
            <p>No, nuestras clases y programas están diseñados para todos los niveles.</p>
            <h4>¿Qué necesito para mi primer día?</h4>
            <p>Ropa cómoda, toalla, botella de agua y muchas ganas de superarte.</p>
        </div>

        <div id="saludo">
            <h3>Contacto</h3>

            <p>¿Listo para comenzar? ¡Contáctanos!</p>
            <p>Teléfono: 611380162</p>
            <p>Dirección: Calle cabo de el fuerte 21</p>
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