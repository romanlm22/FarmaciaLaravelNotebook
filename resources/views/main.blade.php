@extends('layouts.app')

@section('title', 'Tienda')

@section('content')

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

@endsection


@section('scripts')
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
@endsection