@extends('layouts.app')
@section('titulo')
    API
@endsection
@section('contenido')
    <div class="container mt-5">
        <div class="card">
            <header class="card-header">
                <h1>EndPoints API</h1>
            </header>
            <section class="card-body">
                <ul>
                    Etiqueta
                    <li class="ml-5 d-flex justify-content-between">
                        /api/etiqueta
                        <a href="{{route('etiqueta.index')}}" class="Close btn btn-outline-success">
                            <span aria-hidden="true">[GET]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/etiqueta/{id}
                        <a href="#" class="Close btn btn-outline-success disabled">
                            <span aria-hidden="true">[GET]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/etiqueta/{id}
                        <a href="#" class="Close btn btn-outline-primary disabled">
                            <span aria-hidden="true">[POST]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/etiqueta/{id}
                        <a href="#" class="Close btn btn-outline-warning disabled">
                            <span aria-hidden="true">[PUT]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/etiqueta/{id}
                        <a href="#" class="Close btn btn-outline-danger disabled">
                            <span aria-hidden="true">[DELETE]</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    Producto
                    <li class="ml-5 d-flex justify-content-between">
                        /api/producto
                        <a href="{{route('producto.index')}}" class="Close btn btn-outline-success">
                            <span aria-hidden="true">[GET]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/producto/{id}
                        <a href="#" class="Close btn btn-outline-success disabled">
                            <span aria-hidden="true">[GET]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/producto/{id}
                        <a href="#" class="Close btn btn-outline-primary disabled">
                            <span aria-hidden="true">[POST]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/producto/{id}
                        <a href="#" class="Close btn btn-outline-warning disabled">
                            <span aria-hidden="true">[PUT]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/producto/{id}
                        <a href="#" class="Close btn btn-outline-danger disabled">
                            <span aria-hidden="true">[DELETE]</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    Imagen
                    <li class="ml-5 d-flex justify-content-between">
                        /api/imagen
                        <a href="{{route('imagen.index')}}" class="Close btn btn-outline-success">
                            <span aria-hidden="true">[GET]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/imagen/{id}
                        <a href="#" class="Close btn btn-outline-success disabled">
                            <span aria-hidden="true">[GET]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/imagen/{id}
                        <a href="#" class="Close btn btn-outline-primary disabled">
                            <span aria-hidden="true">[POST]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/imagen/{id}
                        <a href="#" class="Close btn btn-outline-warning disabled">
                            <span aria-hidden="true">[PUT]</span>
                        </a>
                    </li>
                    <li class="ml-5 mt-1 d-flex justify-content-between">
                        /api/imagen/{id}
                        <a href="#" class="Close btn btn-outline-danger disabled">
                            <span aria-hidden="true">[DELETE]</span>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </div>
@endsection