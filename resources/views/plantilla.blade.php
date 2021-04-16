<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="/assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    @yield('estilo')
</style>
    <style>
        @import '~bootstrap/dist/css/bootstrap.min.css';
        .footer-dark {
            width: 100%;
            padding: 25px;
            color: #f0f9ff;
            background-color: #282d32;
            text-align: center;
        }

        html {
            min-height: 100%;
            position: relative;
        }

        body {
            max-height: 100%;
            height: 100%;
        }

    </style>
    <title>@yield('titulo')</title>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background: #282d32;">
                <div class="container">
                    <div><a class="navbar-brand" style="color: #fcfcfc;" href="#"><span><img src="assets/img/Logo2.png">Pollo Rey</span> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                    <div class="collapse navbar-collapse" id="navcol-1" style="color: #fcfcfc;">
                        <ul class="navbar-nav nav-right">
                            <li class="nav-item"><a class="nav-link" href="/" style="color: #fcfcfc;">Inicio&nbsp;</a></li>
                            <li class="dropdown transparentbar"><a class="btn dropdown-toggle" aria-expanded="false" data-toggle="dropdown" aria-haspopup="true" href="#" style="color: #fcfcfc;" id="dropdownMenu">Productos&nbsp;</a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="/producto">Producto fresco</a><a class="dropdown-item" href="/embutido">Embutido</a></div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/recetas" style="color: #fcfcfc;">Recetas</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contacto" style="color: #fcfcfc;">Contacto&nbsp;</a></li>
                        </ul>
                        <p class="navbar-text actions"><a class="btn btn-light action-button" role="button" href="login.html">Iniciar sesión</a></p>
                    </div>
                </div>
            </nav>
        </header><!-- Start: Projects Horizontal -->
        @yield('Contenido')
    </div>
    <div class="footer-dark">
        <footer id="footerpad" style="background: #282d32;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8 mx-auto">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                        </ul><p class="copyright text-muted text-center">Desarrollo de Portales Web II &copy;COMEDERA TECHNOLOGY</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
