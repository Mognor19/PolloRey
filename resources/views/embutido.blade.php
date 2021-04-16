@extends('plantilla')
@php
$cont = 0;
@endphp
@section('Contenido')
    <div class="container">
        <div class="row">
            <!-- Insert/Drop Grid Column codes below-->
            <div class="col-md-12">
                <div id="carousel-1" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carousel-1" data-bs-slide-to="0" aria-label="Slide 1"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="1" aria-label="Slide 2"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="2" aria-label="Slide 3"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="3" aria-label="Slide 4" class="active"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="4" aria-label="Slide 5"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="5" aria-label="Slide 6"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="6" aria-label="Slide 7"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($embutido as $key => $item)
                            <div style="display: none">{{ $cont = $cont + 1 }}</div>
                            @if ($cont != 4)
                                <div class="carousel-item">
                                @else
                                    <div class="carousel-item active">
                            @endif
                            <img src="{{ URL::asset($item->imagen) }}" class="d-block w-100 carouselImg"
                                alt="Carousel Image">
                            <div class="carousel-caption d-none d-md-block label_carousel">
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->descripcion }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Controls -->
                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>

    </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($embutido as $item)
                <div class="col-md-4 card-container">
                    <div class="card-flip">
                        <!-- Card 2 Front -->
                        <div class="card front">
                            <img src="{{ URL::asset($item->imagen) }}" class="card-img-top img-fluid">
                            <div class="card-block">
                                <h4 class="card-title">{{ $item->nombre }}</h4>
                                <p class="card-text">{{ $item->vista_previa }}</p>
                            </div>
                        </div>
                        <!-- End Card 2 Front -->

                        <!-- Card 2 Back -->
                        <div class="card back">
                            <div class="card-header">
                                Acerca del producto
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">{{ $item->nombre }}</h4>
                                <p class="card-text">{{ $item->descripcion }}</p>
                                <a href="#" class="btn btn-primary">Recetas</a>
                            </div>
                        </div>
                        <!-- End Card 2 Back -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('estilo',
    '
    body {
    font-size: 18px;
    }
    .carouselImg{
    height:fit-content;
    padding:0;
    margin:0;
    margin-top: 13px;
    margin-left: 10%;
    width:fit-content !important;
    }
    .carousel {
    height: 200px;
    background-color: #fe131a;
    }
    .label_carousel{
    text-align: left;
    padding-left: 20%;
    }
    .card {
    padding:10px;
    margin: 10px 10px;
    height: 390px;
    width: 310px;
    }


    .card-container {
    display: grid;
    perspective: 700px;
    margin: auto;

    }

    .card-flip {
    display: grid;
    grid-template-areas: "frontAndBack";
    transform-style: preserve-3d;
    transition: all 0.7s ease;
    }

    .card-flip div {
    backface-visibility: hidden;
    transform-style: preserve-3d;
    }

    .front {
    grid-area: frontAndBack;
    }

    .back {
    padding-top: 40px;
    grid-area: frontAndBack;
    transform: rotateY(-180deg);
    }

    .card-container:hover .card-flip {
    transform: rotateY(180deg);
    }

    .card img {
    height: 180px;
    width: 310px;
    margin: 0 !important;
    }

    .footer-dark {
    padding: 25px;
    color: #f0f9ff;
    background-color: #282d32;
    text-align: center;
    }

    .footer-dark {
    padding: 25px;
    color: #f0f9ff;
    background-color: #282d32;
    text-align: center;
    }',)
@section('titulo', 'Producto')
