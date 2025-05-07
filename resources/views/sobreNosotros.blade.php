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
                <a href="{{ route('welcome') }}" class="btn btn-primary">Página principal</a>
                <a href="{{ route('inscribirse') }}" class="btn btn-primary">Inscribirse</a>
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
                        @endauth
                    </nav>
                @endif
                <a href="#"></a>
            </nav>
        </div>
    </header>

    <main>
    <section id="sobre-nosotros" class="my-5">
            <div class="container">
                <h2 class="mb-4 text-center">Sobre Nosotros</h2>
                <p class="lead text-center">En Málaga Fit, nos especializamos en ofrecer una experiencia única de entrenamiento físico, respaldada por un equipo profesional de entrenadores, nutricionistas y expertos en bienestar. Creemos que el fitness no es solo una actividad, sino un estilo de vida que debe ser accesible, divertido y transformador.</p>

                <div class="row">
                    <div class="col-md-6">
                        <h3>¿Quiénes somos?</h3>
                        <p>Somos un equipo apasionado por el fitness y la salud. En Málaga Fit, entendemos que cada persona tiene sus propios objetivos y necesidades. Ya sea que quieras perder peso, ganar masa muscular, mejorar tu salud general o sentirte mejor contigo mismo, estamos aquí para guiarte en cada paso de tu proceso.</p>
                        <p>Con más de 10 años de experiencia en el sector, hemos creado un ambiente inclusivo y motivador donde cada miembro se siente valorado y apoyado. No importa tu nivel de condición física, estamos comprometidos con tu progreso y bienestar.</p>
                    </div>
                    <div class="col-md-6">
                        <h3>El Equipo</h3>
                        <p>Contamos con un equipo de profesionales altamente capacitados y comprometidos con tu éxito. Nuestros entrenadores no solo son expertos en su campo, sino también en motivar a nuestros clientes a alcanzar sus metas. Además, contamos con nutricionistas que diseñan planes de alimentación adaptados a tus necesidades individuales para maximizar los resultados.</p>
                        <p>Desde entrenadores personales hasta clases grupales, todos nuestros servicios están diseñados para ofrecer una experiencia personalizada, dinámica y efectiva.</p>
                    </div>
                </div>

                <div class="my-4">
                    <h3>Nuestros Valores</h3>
                    <ul>
                        <li><strong>Compromiso:</strong> Nos comprometemos a ayudarte a alcanzar tus objetivos, sin importar los desafíos que enfrentes.</li>
                        <li><strong>Profesionalismo:</strong> Solo trabajamos con los mejores profesionales para ofrecerte la mejor calidad en cada sesión.</li>
                        <li><strong>Accesibilidad:</strong> Ofrecemos programas de entrenamiento para todos los niveles, desde principiantes hasta atletas avanzados.</li>
                        <li><strong>Motivación:</strong> Queremos ser la fuente constante de motivación y energía que necesitas para mantenerte en el camino hacia tus metas.</li>
                    </ul>
                </div>

                <div class="my-4">
                    <h3>Lo que nos diferencia</h3>
                    <p>Lo que nos hace únicos es nuestra capacidad para adaptarnos a cada uno de nuestros clientes. Sabemos que no todos los caminos hacia el bienestar son iguales, por eso ofrecemos programas personalizados, asesoría continua y un ambiente que fomenta el apoyo y la comunidad.</p>
                    <p>Además, en Málaga Fit, entendemos la importancia de la tecnología. Nuestros sistemas de seguimiento permiten medir tu progreso de forma precisa, asegurándonos de que siempre estés avanzando hacia tus objetivos.</p>
                </div>
            </div>
        </section>

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
