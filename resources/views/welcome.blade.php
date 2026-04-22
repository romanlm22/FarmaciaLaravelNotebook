<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovaFarmar - Corrientes</title>

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head><link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-custom-navbar shadow sticky-top">
        <div class="container"> 
            <a class="logo-custom fw-bold me-3" href="#">NovaFarmar</a>
            
            <form class="d-flex mx-auto w-50 my-2 my-lg-0">
                <div class="input-group">
                    <input class="form-control border-0" type="search" placeholder="Buscar medicamento...">
                    <button class="btn btn-dark" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>

            <div class="ms-auto">
                <button class="btn btn-outline-light position-relative border-2">
                    <i class="bi bi-cart4 fs-5"></i>
                    <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </button>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
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
                                <small>Aceptamos todas las Obras Sociales</small>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselUno" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselUno" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDos" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselDos" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>

        <h4 class="fw-bold mb-4">Productos en Oferta</h4>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 product-card text-center p-4">
                    <i class="bi bi-capsule text-success display-4"></i>
                    <h5 class="mt-3">Ibuprofeno 600</h5>
                    <p class="fw-bold text-success">$2.500</p>
                    <button class="btn btn-success w-100 btn-add-cart">Agregar</button>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 product-card text-center p-4">
                    <i class="bi bi-droplet-fill text-info display-4"></i>
                    <h5 class="mt-3">Alcohol en Gel</h5>
                    <p class="fw-bold text-success">$1.800</p>
                    <button class="btn btn-success w-100 btn-add-cart">Agregar</button>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 product-card text-center p-4">
                    <i class="bi bi-thermometer-half text-danger display-4"></i>
                    <h5 class="mt-3">Termómetro</h5>
                    <p class="fw-bold text-success">$5.200</p>
                    <button class="btn btn-success w-100 btn-add-cart">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <p class="mb-0 fw-bold">NovaFarmar - Corrientes</p>
        <small class="text-secondary">Proyecto Taller Web 2026</small>
    </footer>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let contador = 0;
            const badge = document.getElementById('cart-count');
            document.querySelectorAll('.btn-add-cart').forEach(btn => {
                btn.addEventListener('click', () => {
                    contador++;
                    if(badge) badge.innerText = contador;
                    btn.innerText = "¡Listo!";
                    setTimeout(() => { btn.innerText = "Agregar"; }, 600);
                });
            });
        });
    </script>
</body>
</html>