<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- TU CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- NAVBAR GLOBAL -->
    <x-navbar />

    <!-- CONTENIDO -->
    <div class="flex-grow-1">
    @yield('content')
</div>

<footer class="bg-dark text-white mt-auto pt-4 pb-3">
    <div class="container">

        <div class="row">

            <!-- 🔹 INFO -->
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Farmacia</h5>
                <p class="small">
                    Tu salud es nuestra prioridad. Atención 24hs con productos de calidad.
                </p>
            </div>

            <!-- 🔹 LINKS -->
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold">Enlaces</h6>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-white text-decoration-none">Inicio</a></li>
                    <li><a href="/registrar" class="text-white text-decoration-none">Ingresar</a></li>
                    <li><a href="/login" class="text-white text-decoration-none">Contacto</a></li>
                    <li><a href="/terminos" class="text-white text-decoration-none">Términos y Condiciones</a></li>
                </ul>
            </div>

            <!-- 🔹 REDES -->
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold">Seguinos</h6>

                <div class="d-flex gap-3 mt-2">

                    <a href="https://instagram.com" target="_blank" class="text-white fs-4 social-icon">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="https://facebook.com" target="_blank" class="text-white fs-4 social-icon">
                        <i class="bi bi-facebook"></i>
                    </a>

                </div>

            </div>

        </div>

        <!-- 🔹 LÍNEA -->
        <hr class="border-light">

        <!-- 🔹 COPYRIGHT -->
        <div class="text-center small">
            © {{ date('Y') }} Farmacia - Todos los derechos reservados
        </div>

    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')

</body>
</html>