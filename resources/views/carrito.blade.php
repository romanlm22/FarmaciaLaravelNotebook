<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .scale {
            transform: scale(1.3);
            transition: 0.2s;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success px-4">
    
    <a class="navbar-brand" href="/">
        <img src="https://via.placeholder.com/40"> MiTienda
    </a>

    <div class="ms-auto d-flex gap-3 align-items-center">

        <a href="#" class="btn btn-light">
            <i class="bi bi-person"></i>
        </a>

        <a href="#" class="btn btn-light">
            Sobre Nosotros
        </a>

        <a href="/carrito" class="btn btn-light position-relative">
            <i class="bi bi-cart"></i>

            <span id="contadorCarrito"
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                0
            </span>
        </a>

    </div>
</nav>

<div class="container mt-5">

    <h2>🛒 Carrito de compras</h2>

    <ul id="listaCarrito" class="list-group mt-3"></ul>

    <h4 class="mt-3">Total: $<span id="total">0</span></h4>

    <button class="btn btn-danger mt-3" onclick="vaciar()">Vaciar carrito</button>

    <!-- BOTÓN COMPRA -->
    <button class="btn btn-success mt-3 ms-2" data-bs-toggle="modal" data-bs-target="#modalCompra">
        <i class="bi bi-whatsapp"></i> Comprar
    </button>

</div>

<!-- MODAL FORM -->
<div class="modal fade" id="modalCompra">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Confirmar compra</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form id="formCompra">

                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Pedido</label>
                        <textarea id="pedido" class="form-control" readonly></textarea>
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        Enviar por WhatsApp
                    </button>

                </form>

            </div>

        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center mt-auto p-4">
    Footer
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

let productos = {
    1:{nombre:"Zapatillas Nike",precio:25000},
    2:{nombre:"Remera Adidas",precio:12000}
};

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
let lista = document.getElementById("listaCarrito");
let total = 0;

// 🛒 CONTADOR
function actualizarContador(){
    let contador = document.getElementById("contadorCarrito");
    contador.innerText = carrito.length;

    contador.classList.add("scale");
    setTimeout(() => contador.classList.remove("scale"), 200);
}

// RENDER
function render(){

    lista.innerHTML = "";
    total = 0;

    if(carrito.length === 0){
        lista.innerHTML = "<li class='list-group-item text-danger'>Carrito vacío</li>";
        document.getElementById("total").innerText = 0;
        actualizarContador();
        return;
    }

    carrito.forEach((id,index) => {

        let p = productos[id];
        total += p.precio;

        lista.innerHTML += `
        <li class="list-group-item d-flex justify-content-between">
            ${p.nombre} - $${p.precio}

            <button class="btn btn-danger btn-sm" onclick="eliminar(${index})">
                ❌
            </button>
        </li>
        `;
    });

    document.getElementById("total").innerText = total;
    actualizarContador();
}

// ELIMINAR
function eliminar(index){
    carrito.splice(index,1);
    localStorage.setItem("carrito", JSON.stringify(carrito));
    render();
}

// VACIAR
function vaciar(){
    carrito = [];
    localStorage.removeItem("carrito");
    render();
}

// 🧾 CARGAR PEDIDO EN MODAL
document.getElementById("modalCompra").addEventListener("show.bs.modal", function(){

    if(carrito.length === 0){
        document.getElementById("pedido").value = "Carrito vacío";
        return;
    }

    let texto = "";

    carrito.forEach(id => {
        let p = productos[id];
        texto += `${p.nombre} - $${p.precio}\n`;
    });

    texto += `\nTOTAL: $${total}`;

    document.getElementById("pedido").value = texto;
});

// 📲 ENVIAR WHATSAPP
document.getElementById("formCompra").addEventListener("submit", function(e){
    e.preventDefault();

    let nombre = document.getElementById("nombre").value;
    let email = document.getElementById("email").value;
    let pedido = document.getElementById("pedido").value;

    let mensaje = `🛒 *Pedido Web*%0A%0A${pedido}%0A%0A👤 Nombre: ${nombre}%0A📧 Email: ${email}`;

    // ⚠️ CAMBIAR POR TU NÚMERO
    let numero = "549XXXXXXXXXX";

    let url = `https://wa.me/${numero}?text=${mensaje}`;

    window.open(url, "_blank");
});

// INIT
render();

</script>

</body>
</html>