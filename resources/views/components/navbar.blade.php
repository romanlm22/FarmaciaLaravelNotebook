<nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4">
    
    <a class="navbar-brand" href="/">MiTienda</a>

    <form class="d-flex mx-auto w-50">
        <input id="buscador" class="form-control" type="search" placeholder="Buscar productos...">
    </form>

    <div class="d-flex gap-3 align-items-center">

        <ul class="navbar-nav me-3">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">
                    Categorías
                </a>

                <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href="/categoria1">Cuidado Personal</a></li>
                    <li><a class="dropdown-item" href="/categoria2">Belleza</a></li>
                    <li><a class="dropdown-item" href="/categoria3">Medicamentos</a></li>
                </ul>
            </li>

        </ul>

            <a href="/registros" class="btn btn-light">
                <i class="bi bi-person"></i> Ingresar
            </a>

        <a href="/acercaNosotros" class="btn btn-light">Sobre Nosotros</a>

        <a href="/login" class="btn btn-light">Contacto</a>

        <a href="/carrito" class="btn btn-light position-relative">
            <i class="bi bi-cart"></i>

            <span id="contadorCarrito"
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                0
            </span>
        </a>

    </div>
</nav>