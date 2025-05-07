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
        <div class="container my-5">
            <h2 class="mb-4 text-center">Planes de Suscripción</h2>
            <div id="planes-container" class="row row-cols-1 row-cols-md-3 g-4"></div>
        </div>

        <script>
            fetch('/precios.json')
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('planes-container');
                    data.planes.forEach(plan => {
                        const beneficios = plan.incluye.map(item => `<li class="list-group-item">${item}</li>`).join('');
                        let extras = '';
                        if (plan.beneficios_adicionales) {
                            extras += `<div class="alert alert-success p-2 mt-3"><small><strong>Incluye:</strong></small><br>`;
                            if (plan.beneficios_adicionales.nutricionista) extras += 'Nutricionista<br>';
                            if (plan.beneficios_adicionales.entrenador_personal) extras += 'Entrenador Personal<br>';
                            extras += '</div>';
                        }

                        container.innerHTML += `
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">${plan.nombre}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">€${plan.precio_mensual}/mes</h6>
                            <ul class="list-group list-group-flush mt-3 mb-3">
                                ${beneficios}
                            </ul>
                            ${extras}
                        </div>
                    </div>
                </div>
            `;
                    });
                })
                .catch(error => console.error('Error cargando precios:', error));
        </script>


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