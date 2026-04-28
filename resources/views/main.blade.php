@extends('layouts.app')

@section('title', 'Tienda')

@section('content')

<div class="container mt-4">

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

    <h4 class="fw-bold mb-4 text-center">Productos en Oferta</h4>

        <div class="row">
                @php
                $productos = [
                    [
                                'id'=>1,
                                'nombre'=>'Ibuprofeno 600',
                                'precio'=>2500,
                                'img'=>'https://cdn-icons-png.flaticon.com/512/2966/2966489.png'
                            ],
                            [
                                'id'=>2,
                                'nombre'=>'Alcohol en Gel',
                                'precio'=>1800,
                                'img'=>'https://cdn-icons-png.flaticon.com/512/2913/2913465.png'
                            ],
                            [
                                'id'=>3,
                                'nombre'=>'Termómetro',
                                'precio'=>5200,
                                'img'=>'https://cdn-icons-png.flaticon.com/512/1684/1684375.png'
                            ],
                        ];
                    @endphp

                    @foreach($productos as $p)
                    <div class="col-md-4 mb-4 producto" data-nombre="{{ strtolower($p['nombre']) }}">
                        <div class="card h-100 shadow-sm border-0 product-card text-center p-4">

                            <!-- 🔹 IMAGEN EN VEZ DE ICONO -->
                            <img src="{{ $p['img'] }}" class="producto-img mb-3">

                            <h5 class="mt-2">{{ $p['nombre'] }}</h5>

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

document.getElementById("buscador").addEventListener("keyup", function() {
    let filtro = this.value.toLowerCase();

    document.querySelectorAll(".producto").forEach(p => {
        let nombre = p.getAttribute("data-nombre");
        p.style.display = nombre.includes(filtro) ? "block" : "none";
    });
});

function actualizarContador(){
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    let contador = document.getElementById("contadorCarrito");

    contador.innerText = carrito.length;

    contador.classList.add("scale");
    setTimeout(() => contador.classList.remove("scale"), 200);
}

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