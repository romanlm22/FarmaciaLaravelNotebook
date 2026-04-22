@extends('layouts.app')

@section('title', 'Tienda')

@section('content')

<div class="container mt-4">

    <!-- 🔹 NUEVOS CARRUSELES (DEL SEGUNDO MAIN) -->
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <h5 class="fw-bold text-success mb-3 border-start border-4 border-success ps-2">Sucursales</h5>
            <div id="carouselUno" class="carousel slide shadow" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1586015555751-63bb77f4322a?q=80&w=800" class="d-block w-100">
                        <div class="info-footer">
                            <h6 class="fw-bold mb-0">Atención 24hs</h6>
                            <small>Av. 3 de Abril - Corrientes</small>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=800" class="d-block w-100">
                        <div class="info-footer">
                            <h6 class="fw-bold mb-0">Recetas Digitales</h6>
                            <small>Aceptamos Obras Sociales</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h5 class="fw-bold text-primary mb-3 border-start border-4 border-primary ps-2">Perfumería</h5>
            <div id="carouselDos" class="carousel slide shadow" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?q=80&w=800" class="d-block w-100">
                        <div class="info-footer bg-primary">
                            <h6 class="fw-bold mb-0">Fragancias</h6>
                            <small>Importadas y Nacionales</small>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?q=80&w=800" class="d-block w-100">
                        <div class="info-footer bg-primary">
                            <h6 class="fw-bold mb-0">Cuidado de Piel</h6>
                            <small>Línea Dermocosmética</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 PRODUCTOS -->
    <h4 class="fw-bold mb-4 text-center">Productos en Oferta</h4>

    <div class="row">
        @php
            $productos = [
                ['id'=>1,'nombre'=>'Ibuprofeno 600','precio'=>2500,'icon'=>'bi-capsule text-success'],
                ['id'=>2,'nombre'=>'Alcohol en Gel','precio'=>1800,'icon'=>'bi-droplet-fill text-info'],
                ['id'=>3,'nombre'=>'Termómetro','precio'=>5200,'icon'=>'bi-thermometer-half text-danger'],
            ];
        @endphp

        @foreach($productos as $p)
        <div class="col-md-4 mb-4 producto" data-nombre="{{ strtolower($p['nombre']) }}">
            <div class="card h-100 shadow-sm border-0 product-card text-center p-4">
                <i class="bi {{ $p['icon'] }} display-4"></i>
                <h5 class="mt-3">{{ $p['nombre'] }}</h5>
                <p class="fw-bold text-success">${{ $p['precio'] }}</p>
                <button class="btn btn-success w-100 agregar-btn" data-id="{{ $p['id'] }}">
                    Agregar al carrito
                </button>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection


@section('scripts')
<script>

// 🔍 BUSCADOR (se mantiene igual)
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

// 🛒 AGREGAR PRODUCTOS (ADAPTADO AL SEGUNDO MAIN)
document.querySelectorAll(".agregar-btn").forEach(btn => {

    btn.addEventListener("click", function() {

        let id = this.getAttribute("data-id");

        let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
        carrito.push(id);

        localStorage.setItem("carrito", JSON.stringify(carrito));

        this.textContent = "✔ Agregado";
        this.classList.add("agregado");

        setTimeout(() => {
            this.textContent = "Agregar al carrito";
            this.classList.remove("agregado");
        }, 1000);

        actualizarContador();
    });

});

// INIT
actualizarContador();

</script>
@endsection