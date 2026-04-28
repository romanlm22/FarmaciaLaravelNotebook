@extends('layouts.app')

@section('title', 'Acerca de Nosotros')

@section('content')

<div class="container mt-5">

    <h1 class="text-center mb-5">Nuestro Equipo</h1>

    <div class="row">

        <div class="col-md-6 text-center">
            <div class="card shadow p-4">

                <img src="{{ asset('img/nosotros/20230228_101632.jpg') }}"
                     class="rounded-circle mx-auto mb-3">

                <h4>V.Roman Lopez Machado</h4>
                <p class="text-muted">Programador Full Stack</p>

                <p>Descripción breve.</p>

                <a href="#" class="btn btn-primary">Contacto</a>

            </div>
        </div>

        <div class="col-md-6 text-center">
            <div class="card shadow p-4">

                <img src="https://via.placeholder.com/200"
                     class="rounded-circle mx-auto mb-3">

                <h4>Francisco Gomez Perkovich</h4>
                <p class="text-muted">Diseñador WEB</p>

                <p>Descripción breve.</p>

                <a href="#" class="btn btn-success">Contacto</a>

            </div>
        </div>

    </div>

</div>

@endsection