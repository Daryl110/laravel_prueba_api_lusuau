@extends('layouts.app')
@section('parametros')
    <style type="text/css">
        .imagen-banner{
            width: 100vw;
            height: 55vh;
            float: none;
            z-index: 10;
        }
        .carrusel{
            position: absolute;
            width: 40vw;
            height: 30vh;
            background-color: white;
            z-index: 20 !important;
            left: 15%;
            top: 70%;
            border-radius: 15px 15px 0 0;
            display:block;
            overflow-y: scroll !important;
        }
        .botones{
            z-index: 20 !important;
            position: absolute !important;
            left: 20%;
            top: 60%;
        }
        .carousel-control-prev{
            height: 40px;
            width: 60px;
        }
        .carousel-control-next{
            height: 40px;
            width: 60px;
        }
        .productos{
            display: grid;
            width: 94vw;
            height: 75vh;
        }
        .contenedor-banner{
            position: relative;
        }
        .productos{
            position: relative;
            z-index: 40 !important;
            margin-top: 10%;
        }
        .descuento{
            position: absolute;
            left: 50%;
            background-color: red;
            border-radius: 15px;
        }
        .texto-descunto{
            padding: 10px;
        }
        a[class~="active"]{
            border-bottom: 2px #3f9ae5 solid;
        }
    </style>
@endsection
@section('titulo')
    About
@endsection
@section('contenido')
    <section>
        <div class="contenedor-banner">
            <img src="{{asset('img/image.jpg')}}" class="imagen-banner">
            <div class="carrusel">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner container">
                        <div class="carousel-item active p-5">
                            <h1>dasdsadasdasdasdasdsasdasd</h1>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Veniam nesciunt aspernatur exercitationem voluptatibus vitae
                            explicabo neque, sed autem adipisci, dolor maiores porro, illum
                            uia voluptatem omnis optio! Ex, consequatur fugiat?
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Autem repellendus aliquam veniam accusantium ipsam consequatur
                            impedit hic dicta amet ratione, provident suscipit fuga distinctio
                            velit perferendis, ab voluptatem aspernatur quod?
                        </div>
                        <div class="carousel-item p-5">
                            <h1>dasdsadasdasdasdasdsasdasd</h1>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Veniam nesciunt aspernatur exercitationem voluptatibus vitae
                            explicabo neque, sed autem adipisci, dolor maiores porro, illum
                            uia voluptatem omnis optio! Ex, consequatur fugiat?
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Autem repellendus aliquam veniam accusantium ipsam consequatur
                            impedit hic dicta amet ratione, provident suscipit fuga distinctio
                            velit perferendis, ab voluptatem aspernatur quod?
                        </div>
                        <div class="carousel-item p-5">
                            <h1>dasdsadasdasdasdasdsasdasd</h1>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Veniam nesciunt aspernatur exercitationem voluptatibus vitae
                            explicabo neque, sed autem adipisci, dolor maiores porro, illum
                            uia voluptatem omnis optio! Ex, consequatur fugiat?
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Autem repellendus aliquam veniam accusantium ipsam consequatur
                            impedit hic dicta amet ratione, provident suscipit fuga distinctio
                            velit perferendis, ab voluptatem aspernatur quod?
                        </div>
                    </div>
                </div>
            </div>
            <div class="botones">
                <a class="carousel-control-next btn btn-primary" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-prev btn btn-primary" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="container-fluid productos">
            <h1 style="color: #f66d9b;">Products.</h1>
            <div class="card pl-2 pr-2">
                <div class="m-auto row">
                    @foreach($productos as $producto)
                        <div class="card col mr-2 ml-2" style="width: 18rem;">
                            <div class="card-img-top">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php $i = true;$active = "active"?>
                                         @foreach($producto["imagenes"] as $imagen)
                                             @if(!$i) <?php $active = ""?> @endif
                                            <div class="carousel-item {{$active}} p-5">
                                                <img src="{{$imagen["url"]}}" class="card-img-top">
                                            </div>
                                             <?php $i = false;?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @if($producto["descuento"] != 0)
                                <div class="descuento justify-content-center text-center">
                                    <h5 class="texto-descunto" style="color: white;">{{$producto["descuento"]}}% Descuento</h5>
                                </div>
                            @endif
                            <div class="card-body">
                                <h1 style="color: #3f9ae5;">${{$producto["precio"]}}</h1>
                                <h5 class="card-title">{{$producto["nombre"]}}</h5>
                                <p class="card-text">{{$producto["descripcion"]}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection