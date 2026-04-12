<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .navbar-custom { background-color: #28a745; }
        .card img { height: 200px; object-fit: cover; }
        .agregado { background-color: gray !important; }
        .scale { transform: scale(1.3); transition: 0.2s; }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4">
    
    <a class="navbar-brand" href="/">MiTienda</a>

    <!-- BUSCADOR -->
    <form class="d-flex mx-auto w-50">
        <input id="buscador" class="form-control" type="search" placeholder="Buscar productos...">
    </form>

    <div class="d-flex gap-3 align-items-center">

        <!-- LOGIN / LOGOUT -->
        @if(!session('logueado'))

            <a href="/login" class="btn btn-light">
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

        <a href="/equipo" class="btn btn-light">Sobre Nosotros</a>

        <!-- CARRITO -->
        <a href="/carrito" class="btn btn-light position-relative">
            <i class="bi bi-cart"></i>

            <span id="contadorCarrito"
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                0
            </span>
        </a>

    </div>
</nav>

<!-- PRODUCTOS -->
<div class="container mt-5">
    <div class="row">

        <!-- PRODUCTO 1 -->
        <div class="col-md-6 mb-4 producto" data-nombre="zapatillas nike">
            <div class="card">
                <img src="https://via.placeholder.com/300x200">
                <div class="card-body text-center">
                    <h5>Zapatillas Nike</h5>
                    <p>$25000</p>
                    <button class="btn btn-success agregar-btn">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- PRODUCTO 2 -->
        <div class="col-md-6 mb-4 producto" data-nombre="remera adidas">
            <div class="card">
                <img src="https://via.placeholder.com/300x200">
                <div class="card-body text-center">
                    <h5>Remera Adidas</h5>
                    <p>$12000</p>
                    <button class="btn btn-success agregar-btn">Agregar al carrito</button>
                </div>
            </div>
        </div>

    </div>
</div>

<script>

// 🔍 BUSCADOR DINÁMICO
document.getElementById("buscador").addEventListener("keyup", function() {
    let filtro = this.value.toLowerCase();

    document.querySelectorAll(".producto").forEach(p => {
        let nombre = p.getAttribute("data-nombre");
        p.style.display = nombre.includes(filtro) ? "block" : "none";
    });
});

// 🛒 CONTADOR
function actualizarContador(){
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    let contador = document.getElementById("contadorCarrito");

    contador.innerText = carrito.length;

    contador.classList.add("scale");
    setTimeout(() => contador.classList.remove("scale"), 200);
}

// 🛒 AGREGAR PRODUCTOS
document.querySelectorAll(".agregar-btn").forEach((btn, index) => {

    btn.addEventListener("click", function() {

        let id = index + 1;

        let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

        carrito.push(id);

        localStorage.setItem("carrito", JSON.stringify(carrito));

        // animación botón
        this.textContent = "Agregado";
        this.classList.add("agregado");

        setTimeout(() => {
            this.textContent = "Agregar al carrito";
            this.classList.remove("agregado");
        }, 1200);

        actualizarContador();
    });

});

// INIT
actualizarContador();

</script>

</body>
</html>