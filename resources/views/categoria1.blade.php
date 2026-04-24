@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div class="container mt-4">

    <!-- 🔹 TÍTULO PRINCIPAL -->
    <h1 class="text-center fw-bold mb-4">Titulo</h1>

    <!-- 🔹 CARRUSEL GRANDE -->
    <div id="carouselPrincipal" class="carousel slide shadow-lg mb-5 custom-carousel" data-bs-ride="carousel">

        <div class="carousel-inner rounded">

            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1580281657527-47f249e8f9b7?q=80&w=1200" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?q=80&w=1200" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?q=80&w=1200" class="d-block w-100">
            </div>

        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

    <!-- 🔹 PRODUCTOS DESTACADOS -->
    <h3 class="fw-bold text-center mb-4">Productos Destacados</h3>

    <div class="row">

        @php
            $productos = [
                ['id'=>1,'nombre'=>'Ibuprofeno 600','precio'=>2500,'icon'=>'bi-capsule text-success'],
                ['id'=>2,'nombre'=>'Alcohol en Gel','precio'=>1800,'icon'=>'bi-droplet-fill text-info'],
                ['id'=>3,'nombre'=>'Termómetro','precio'=>5200,'icon'=>'bi-thermometer-half text-danger'],
                ['id'=>4,'nombre'=>'Paracetamol','precio'=>2100,'icon'=>'bi-capsule text-warning'],
                ['id'=>5,'nombre'=>'Vitamina C','precio'=>3000,'icon'=>'bi-heart-pulse text-danger'],
                ['id'=>6,'nombre'=>'Protector Solar','precio'=>4500,'icon'=>'bi-sun text-warning'],
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

// 🛒 CONTADOR
function actualizarContador(){
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    let contador = document.getElementById("contadorCarrito");

    if(contador){
        contador.innerText = carrito.length;
        contador.classList.add("scale");

        setTimeout(() => contador.classList.remove("scale"), 200);
    }
}

// 🛒 AGREGAR PRODUCTOS
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

actualizarContador();

</script>
@endsection
