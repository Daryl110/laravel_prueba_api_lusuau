<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                font-family: 'Nunito', sans-serif;
            }
            .nav-item{
                margin: 0 6vh 0 6vh !important;
            }
        </style>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('css/app.css')}}">

        <!-- Scripts -->
        <script type="text/javascript" src="{{\Illuminate\Support\Facades\URL::asset('js/app.js')}}"></script>
        @yield('parametros')

        <title>@yield('titulo')</title>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" data>
                <a class="navbar-brand" href="#">
                    <img src="{{asset('favicon.ico')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                    TEST
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Features
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <button class="btn btn-light">Search</button>
                </div>
            </nav>
        </div>
        @yield('contenido')
    </body>
</html>
