<nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4">
    
    <a class="navbar-brand" href="/">MiTienda</a>

    <form class="d-flex mx-auto w-50">
        <input id="buscador" class="form-control" type="search" placeholder="Buscar productos...">
    </form>

    <div class="d-flex gap-3 align-items-center">

        @if(!session('logueado'))

            <a href="/registros" class="btn btn-light">
                <i class="bi bi-person"></i> Ingresar
            </a>

        @else

            <span class="text-white">
                Hola, {{ session('usuario')['nombre'] ?? 'Usuario' }}
            </span>

            <a href="/logout" class="btn btn-danger">
                Cerrar sesión
            </a>

        @endif

        <a href="/acercaNosotros" class="btn btn-light">Sobre Nosotros</a>

        <a href="/carrito" class="btn btn-light position-relative">
            <i class="bi bi-cart"></i>

            <span id="contadorCarrito"
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                0
            </span>
        </a>

    </div>
</nav>