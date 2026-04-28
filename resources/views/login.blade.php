@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<div class="container mt-5 mb-5">

    <!-- 🔹 TÍTULO -->
    <h2 class="text-center fw-bold mb-4">Contacto</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0">

                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Envíanos un mensaje</h4>
                </div>

                <div class="card-body">

                    <!-- MENSAJE DE ÉXITO -->
                    <div id="mensajeExito" class="alert alert-success d-none">
                        Mensaje enviado correctamente ✅
                    </div>

                    <form id="formContacto">

                        <input type="text" id="nombre" class="form-control mb-3" placeholder="Nombre" required>

                        <input type="email" id="email" class="form-control mb-3" placeholder="Email" required>

                        <textarea id="mensaje" class="form-control mb-3" rows="4" placeholder="Escribí tu mensaje..." required></textarea>

                        <button type="submit" class="btn btn-success w-100">
                            Enviar mensaje
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>

    <!-- 🔹 MAPA -->
    <div class="mt-5">
        <h3 class="text-center fw-bold mb-3">📍 Visitános</h3>

        <div class="rounded shadow overflow-hidden">
            <iframe 
                src="https://www.google.com/maps?q=Corrientes+Argentina&output=embed"
                width="100%" 
                height="350" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>

</div>

@endsection


@section('scripts')
<script>

// 📩 SIMULACIÓN ENVÍO FORMULARIO
document.getElementById("formContacto").addEventListener("submit", function(e){
    e.preventDefault();

    let nombre = document.getElementById("nombre").value;
    let email = document.getElementById("email").value;
    let mensaje = document.getElementById("mensaje").value;

    if(nombre && email && mensaje){
        document.getElementById("mensajeExito").classList.remove("d-none");

        // limpiar campos
        this.reset();

        setTimeout(() => {
            document.getElementById("mensajeExito").classList.add("d-none");
        }, 3000);
    }
});

</script>
@endsection