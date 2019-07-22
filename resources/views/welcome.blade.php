<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Api</title>
    </head>
    <body>

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

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
                src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"
        ></script>
        <script
                src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"
        ></script>
        <script
                src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"
        ></script>
    </body>
</html>