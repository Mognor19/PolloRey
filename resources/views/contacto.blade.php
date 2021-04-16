@extends('plantilla')

@section('Contenido')
<main>
    <div class="row">
        <div class="col-md-4">
            <div class="card-container-imagia">
                <div class="card-imagia">
                    <div class="front-imagia">
                        <div class="content-imagia">
                            
                            <img position="fixed" width="300px" height="350px" alt="" src="assets/img/Flag_map_of_Guatemala.svg.png">
                            
                        </div>
                        <div class="footer-imagia"><span><i class="fa fa-plus"></i> Contacto Guatemala</span></div>
                    </div>
                    <div class="back-imagia">
                        <div class="content-imagia content-back-imagia">
                            <div>
                                <h3 class="name-imagia">Guatemala</h3>
                            <p class="subtitle-imagia">Oficinas Locales </p>
                            <p class="text-center"><b>Avícola Villalobos, S.A</b>
                                <br>
                                <br>
                                <b>Dirección:</b>
                                <text>46 Calle 21-89 zona 12, Ciudad de Guatemala, Centro América.</text>
                                <br>
                                <b>Télefono:</b>
                                <text>+502 24775580</text>
                            </p>
                            </div>
                        </div>
                        <div class="footer-imagia">
                            <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container-imagia">
                <div class="card-imagia">
                    <div class="front-imagia">
                        <div class="content-imagia">
                            <img position="fixed" width="300px" height="350px" alt="" src="assets/img/1200px-Flag-map_of_Honduras.png">
                        </div>
                        <div class="footer-imagia"><span><i class="fa fa-plus"></i> Contacto Honduras</span></div>
                    </div>
                    <div class="back-imagia">
                        <div class="content-imagia content-back-imagia">
                            <div>
                                <h3 class="name-imagia">Honduras</h3>
                            <p class="subtitle-imagia">Oficinas Locales </p>
                            <p class="text-center"><b>Oficinas Administrativas</b>
                                <br>
                                <br>
                                <b>Dirección Tegucigalpa:</b>
                                <text>Colonia Tiloarque Edificio Hasbun, contigo a Plaza Milenium sobre el boulevard de las Fuerzas Armadas.</text>
                                <br>
                                <b>Télefono:</b>
                                <text>+504 22753000</text>
                                <br>
                                <br>
                                <p class="text-center"><b>Dirección San Pedro Sula:</b>
                                    <text> Blvd. del Sur Frente a Canasa, salida a Tegucigalpa</text>
                                    <br>
                                    <b>Télefono:</b>
                                    <text>+504 25093300</text>
                                </p>
                            </p>
                            </div>
                        </div>
                        <div class="footer-imagia">
                            <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container-imagia">
                <div class="card-imagia">
                    <div class="front-imagia">
                        <div class="content-imagia">
                            <img position="fixed" width="300px" height="350px" alt="" src="assets/img/kisspng-flag-of-costa-rica-map-reptilian-5b0f0289d69d97.3623099215277103458791.png">
                        </div>
                        <div class="footer-imagia"><span><i class="fa fa-plus"></i> Contacto Costa Rica</span></div>
                    </div>
                    <div class="back-imagia">
                        <div class="content-imagia content-back-imagia">
                            <div>
                                <h3 class="name-imagia">Costa Rica</h3>
                            <p class="subtitle-imagia">Oficinas Locales </p>
                            <p class="text-center"><b>Oficinas Administrativas</b>
                                <br>
                                <br>
                                <b>Dirección:</b>
                                <text> Alajuela, Río Segundo, Oficentro Santamaría, Boulevard del Aeropuerto, del Casino Fiesta 400 mts norte Edificio A segundo nivel.</text>
                                <br>
                                <b>Télefono:</b>
                                <text>+506 41061000</text></p>
                            </div>
                        </div>
                        <div class="footer-imagia">
                            <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="form-horizontal bg-forms">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="Nombres" class="col-sm-2 control-label">Nombres</label>
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Juan Carlos">
                </div>
                <div class="col-md-6">
                    <label for="Apellidos" class="col-sm-2 control-label">Apellidos</label>
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Flores Rodriguez">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-5">
                    <label for="Email" class="col-sm-8 control-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="inputPassword3" placeholder="ejemplo123@domain.com">
                </div>
                <div class="col-md-4">
                    <label for="Telefono" class="col-sm-7 control-label">Télefono</label>
                    <input type="number" class="form-control" id="inputPassword3" placeholder="+504 9967-3256">
                </div>
                <div class="col-md-2">
                    <label for="Pais" class="col-sm-7 control-label">País</label>
                    <select name="País" style="width: 160px; height: 38px">
                        <option>Guatemala</option>
                        <option>Honduras</option>
                        <option>Costa Rica</option>
                        <option>Otro</option>
                    </select>
                </div>
            </div>
            
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label for="Pais" class="col-sm-7 control-label">Mensaje</label>
                    <input type="text" class="form-control" id="note3" placeholder="Tu Mensaje">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-lg btn-primary">Enviar</button>
            </div>
            </div>
        </div>
    </form>
</main>
@endsection
@section('estilo',
    '
    .card-section-imagia {
        padding: 60px 0 30px;
        background: #f1f1f1;
      }
      
      .card-section-imagia > h1 {
        font-size: 48px;
        text-align: center;
        margin: 0 0 10px;
      }
      
      .card-section-imagia > h2 {
        font-size: 24px;
        text-align: center;
        margin: 0 0 60px;
        color: #aaaaaa;
        text-transform: uppercase;
      }
      
      .card-container-imagia {
        -webkit-perspective: 1500px;
        -moz-perspective: 1500px;
        -o-perspective: 1500px;
        perspective: 1500px;
        margin-bottom: 30px;
      }
      
      .card-container-imagia:hover .card-imagia {
        -webkit-transform: rotateY( 180deg );
        -moz-transform: rotateY( 180deg );
        -o-transform: rotateY( 180deg );
        transform: rotateY( 180deg );
      }
      
      .card-imagia {
        -webkit-transition: -webkit-transform .5s;
        -moz-transition: -moz-transform .5s;
        -o-transition: -o-transform .5s;
        transition: transform .5s;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
        position: relative;
      }
      
      .front-imagia, .back-imagia {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -o-backface-visibility: hidden;
        backface-visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #FFF;
        box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
        padding-bottom: 46px;
      }
      
      .front-imagia {
        z-index: 2;
      }
      
      .back-imagia {
        -webkit-transform: rotateY( 180deg );
        -moz-transform: rotateY( 180deg );
        -o-transform: rotateY( 180deg );
        transform: rotateY( 180deg );
        z-index: 3;
      }
      
      .card-container-imagia, .front-imagia, .back-imagia {
        width: 100%;
        height: 420px;
        border-radius: 4px;
      }
      
      .card-imagia .cover-imagia {
        height: 120px;
        overflow: hidden;
        border-radius: 4px 4px 0 0;
      }
      
      .card-imagia .cover-imagia img {
        width: 100%;
        height: auto;
      }
      
      .card-imagia .cover-imagia.cover-gradient {
        background: #ffffff;
        background-image: radial-gradient(circle at 50% 100% , #ADCACE 0%, #89BECE 33%, #34A1C8 66%, #036EAD 100%);
      }
      
      .card-imagia .user-imagia {
        border-radius: 50%;
        display: block;
        height: 130px;
        margin: -65px auto 0;
        overflow: hidden;
        width: 120px;
      }
      
      .card-imagia .user-imagia img {
        background: #FFFFFF;
        border: 5px solid #FFFFFF;
        width: 100%;
      }
      
      .card-imagia .content-imagia {
        background-color: rgba(0, 0, 0, 0);
        box-shadow: none;
        padding: 10px 20px 20px;
      }
      
      .content-back-imagia {
        display: flex;
        align-items: center;
        height: 100%;
      }
      
      .card-imagia .name-imagia {
        font-size: 22px;
        line-height: 26px;
        margin: 0;
        text-align: center;
        text-transform: capitalize;
      }
      
      .card-imagia .subtitle-imagia {
        color: #aaaaaa;
        text-align: center;
        margin-bottom: 15px;
      }
      
      .card-imagia .footer-imagia {
        width: 100%;
        color: #aaaaaa;
        padding: 10px 0;
        text-align: center;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #eeeeee;
      }
      
      .card-imagia .footer-imagia .social-imagia a {
        margin: 0 7px;
        font-size: 18px;
      }
      
      .bg-blue{
        background-color: #282d32;
      }
      .bg-forms{
        background-color: #aaaaaa5c;
      }
      .bluetext{
        color: #aaaaaa;
      }
      
      
      @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .front-imagia, .back-imagia {
          -ms-backface-visibility: visible;
          backface-visibility: visible;
        }
      }
      
      @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .back-imagia {
          visibility: hidden;
          -ms-transition: all 0.2s cubic-bezier(.92,.01,.83,.67);
        }
      }
      
      @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .front-imagia {
          z-index: 4;
        }
      }
      
      @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .card-container-imagia:hover .back-imagia {
          z-index: 5;
          visibility: visible;
        }
      }      
    ',)
@section('titulo', 'Contaco')
