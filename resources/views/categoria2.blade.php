html, body {
    height: 100%;
}

body {
    display: flex;
    flex-direction: column;
}

.navbar-custom,
.bg-custom-navbar {
    background-color: #198754 !important;
}

.logo-custom {
    color: #28a745; 
    font-size: 2rem;
    font-weight: bold;
    text-decoration: none;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.2); 
}

/* 🔹 CARRUSEL GENERAL */
.carousel-item img {
    width: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover;
    object-position: center;
}

/* 🔹 CARRUSEL GRANDE (NUEVO) */
.custom-carousel {
    margin: 0 20px; /* margen lateral */
}

.custom-carousel .carousel-item img {
    height: 65vh; /* ocupa gran parte de la pantalla */
    border-radius: 15px;
}

/* 🔹 FOOTER INFO */
.info-footer {
    background-color: #212529;
    color: #f8f9fa; 
    padding: 15px;  
    text-align: center;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    min-height: 80px;
    display: flex;        
    flex-direction: column;
    justify-content: center;
}

/* 🔹 CARDS */
.product-card { 
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
    border-radius: 15px; 
    border: none;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.product-card:hover { 
    transform: translateY(-5px); 
    box-shadow: 0 8px 15px rgba(0,0,0,0.2);
}

.card img {
    height: 200px;
    object-fit: cover;
}

.card {
    border-radius: 10px;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.product-card:hover {
    transform: scale(1.03);
}

/* 🔹 BOTONES */
.agregado {
    background-color: gray !important;
}

.scale {
    transform: scale(1.3);
    transition: 0.2s;
}

/* 🔹 DROPDOWN */
.dropdown-menu {
    border-radius: 10px;
}

.dropdown-item:hover {
    background-color: #28a745;
    color: white;
}
