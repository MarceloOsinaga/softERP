<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2017 08:07:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soft | ERP</title>

    <!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body id="page-top" class="landing-page no-skin-config">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SoftERP</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        {{--<li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#features">Features</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>--}}
                        <li><a href="{{ route('login') }}">Iniciar Session</a></li>
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>software ERP</h1>
                    <p>Enterprise Resource Planning</p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="img/landing/laptop.png" alt="laptop"/>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>software ERP</h1>
                    <p>Enterprise Resource Planning</p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section id="features" class="container services">
    <div class="row">
        <div class="col-sm-3">
            <h2>importancia de un ERP</h2>
            <p>Un sistema de ERP se compone de aplicaciones de planificación de recursos empresariales que hablan entre sí y comparten una base de datos. Esto significa que usted puede eliminar información entre los departamentos y darles a todos una fuente única de verdad. Su sistema puede automatizar sus procesos centrales de negocio y ayudarlo a garantizar el cumplimiento regulatorio, reducir el riesgo, hacer informes de seguimiento rápido y mucho más...</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Características</h2>
            <p>• El uso de una base de datos común<br/>• La consistencia y exactitud de los datos<br/>• Las mejoras en los informes del sistema<br/>• Reducción de costos.<br/>• Fácil adaptabilidad.<br/>• Mejoras en “escalabilidad”.<br/>• Alcance fuera de la organización.<br/>• Mejoras en el mantenimiento.<br/>• Comercio electrónico.<br/>• Flujo eficiente de información.<br/>• Mejoras en cuanto al servicio al cliente.<br/>• competitivo.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Ventajas </h2>
            <p>• Software especializado para determinada industria<br/>• Ayudará a administrar su empresa de cualquier tipo<br/>• Los ERP están creados para adaptarse a la idiosincrasia de cada empresa<br/>• la funcionalidad se encuentra dividida en módulos, los cuales pueden instalarse de acuerdo con los requerimientos del cliente<br/>• Da soporte a las funciones básicas del negocio o actividad.<br/>• Flujo eficiente de información.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>QUIEN UTILIZA ERP</h2>
         <!--    <img src="img/landing/erp.jpg" class="img-responsive img-circle img-small" alt="">     -->
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
    </div>
</section>

<section id="team" class="gray-section team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Desarrolladores</h1>
                <p>Los integrantes del equipo de desarrollo de este proyecto se muestran a continuación.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 wow fadeInLeft">
                <div class="team-member">
                    <img src="img/landing/Ber.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Bernardo </span>Yubánure</h4>                    
                    <p>Facultad de ingeniería en ciencias de la computación y telecomunicaciones U.A.G.R.M 2-2018 </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/Al.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Al Ivan</span> Calle</h4>
                    <p>Facultad de ingeniería en ciencias de la computación y telecomunicaciones U.A.G.R.M 2-2018 </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInRight">
                <div class="team-member">
                    <img src="img/landing/German.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">German </span>Mendoza</h4>
                    <p>Facultad de ingeniería en ciencias de la computación y telecomunicaciones U.A.G.R.M 2-2018 </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 wow fadeInLeft">
                <div class="team-member">
                    <img src="img/landing/Marcelo.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Marcelo </span> Osinaga</h4>
                    <p>Facultad de ingeniería en ciencias de la computación y telecomunicaciones U.A.G.R.M 2-2018 </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/Brayan.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Brayan </span> Vera</h4>
                    <p>Facultad de ingeniería en ciencias de la computación y telecomunicaciones U.A.G.R.M 2-2018 </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInRight">
                <div class="team-member">
                    <img src="img/landing/Luis.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Luis Andres</span> Barjas</h4>
                    <p>Facultad de ingeniería en ciencias de la computación y telecomunicaciones U.A.G.R.M 2-2018 </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">                
                <p>Este producto se encuentra protegido por los derechos de autoría de los desarrolladores, cualquier alteracion en el codigo fuente que afecte el funcionamiento del sistema será considerado como un Plagio</p>
            </div>
        </div>
    </div>
</section>

<!-- Mainly scripts -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('js/inspinia.js')}}"></script>
<script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('js/plugins/wow/wow.min.js')}}"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2017 08:08:07 GMT -->
</html>