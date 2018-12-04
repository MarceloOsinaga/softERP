@extends('layouts.admin')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
<div class="fh-breadcrumb">
    <!--AQUI ES LA COLUMNA DE NOMBRES-->
    <div class="fh-column">
        <div class="full-height-scroll">
            <ul class="list-group elements-list">
                <li class="list-group-item">
                    <a data-toggle="tab" href="#tab-1">
                        <small class="pull-right text-muted"> 2018</small>
                        <strong>QUIENES SOMOS?</strong>
                        <div class="small m-t-xs">
                            <p>
                                ERP sistemas de planificacion de recursos
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> Riviera State 32/106
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a data-toggle="tab" href="#tab-3">
                        <small class="pull-right text-muted"> 2018</small>
                        <strong>LOGIN</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                registrar e gestionar un usuario
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> Berlin 120R/15
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a data-toggle="tab" href="#tab-4">
                        <small class="pull-right text-muted"> 2018</small>
                        <strong>BACKUP</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                informacion concerniente a los backup del software
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> Berlin 120R/15
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a data-toggle="tab" href="#tab-6">
                        <small class="pull-right text-muted"> 2018</small>
                        <strong>MODULOS DEL SISTEMA </strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                informacion sobre las areas mas importantes de la empresa
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> Berlin 120R/15
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a data-toggle="tab" href="#tab-7">
                        <small class="pull-right text-muted"> 2018</small>
                        <strong>PREGUNTAS MAS FRECUENTES</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                informacion de las preguntas mas frecuentes
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> Berlin 120R/15
                            </p>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <!--COMIENZA LOS CONTENIDOS-->
    <div class="full-height">
        <div class="full-height-scroll white-bg border-left">

            <div class="element-detail-box">
                <div class="tab-content">
                    <!-COMIENZA TAB1->
                    <div id="tab-1" class="tab-pane">
                        <div class="small text-muted">
                            <i class="fa fa-clock-o"></i> LUNES,29 Octubre 2018
                        </div>
                        <h1>
                            EMPRESA DE DESARROLLO DE SOFTWARE
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="img/DESARROLLADORES.jpg">
                                    </div>
                                </div>

                            </div>
                        </h1>
                        <p>
                            somos un grupo de derrallodares incursionando en el dessarrollo de software.
                        </p>
                        <p>
                            orientado al dessarrollo de sistemas de gestion.
                        </p>
                        <p class="small">
                            <strong>al ivan calle coymbra </strong>
                        </p>
                    </div>
                    <!--COMIENZA TAB2 EL QUE SE VA A MANTENER ACTIVO-->
                    <div id="tab-2" class="tab-pane active">

                        <h1>
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="img/erp.jpg">
                                    </div>
                                </div>

                            </div>
                        </h1>
                        <h3>
                            IMPORTANCIA DE UN ERP
                        </h3>
                        <p>
                            Un sistema de ERP se compone de aplicaciones de planificación de recursos empresariales que hablan entre sí y comparten una base de datos
                        </p>
                        <p>
                            Esto significa que usted puede eliminar información entre los departamentos y darles a todos una fuente única de verdad
                        </p>

                        <p>
                            Su sistema puede automatizar sus procesos centrales de negocio y ayudarlo a garantizar el cumplimiento regulatorio, reducir el riesgo, hacer informes de seguimiento rápido y mucho más.
                        </p>
                        <h3>
                            CARACTERISTICAS
                        </h3>
                        <p>• El uso de una base de datos común</p>
                        <p>• La consistencia y exactitud de los datos</p>
                        <p>• Las mejoras en los informes del sistema</p>
                        <p>• Reducción de costos.</p>
                        <p>• Fácil adaptabilidad.</p>
                        <p>• Mejoras en “escalabilidad”.</p>
                        <p>• Alcance fuera de la organización.</p>
                        <p>• Mejoras en el mantenimiento.</p>
                        <p>• Comercio electrónico.</p>
                        <p>• Flujo eficiente de información.</p>
                        <p>• Mejoras en cuanto al servicio al cliente.</p>
                        <p>• competitivo.</p>
                        <h3>
                            VENTAJAS
                        </h3>
                        <p>• Software especializado para determinada industria</p>
                        <p>• Ayudará a administrar su empresa de cualquier tipo</p>
                        <p>• Los ERP están creados para adaptarse a la idiosincrasia de cada empresa</p>
                        <p>• la funcionalidad se encuentra dividida en módulos, los cuales pueden instalarse de acuerdo con los requerimientos del cliente</p>
                        <p>• Da soporte a las funciones básicas del negocio o actividad.</p>
                        <p>• Flujo eficiente de información.
                        <p class="small">
                            <strong>SISTEMAS DE INFORMACION ERP </strong>
                        </p>

                    </div>
                    <!-COMIENZA TAB3->
                    <div id="tab-3" class="tab-pane">
                        <div class="small text-muted">
                            <i class="fa fa-clock-o"></i> Tuesday, 15 May 2014, 10:32 am
                        </div>
                        <h1>
                            INTERFACE DE LOGIN
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="img/login2.jpg">
                                    </div>
                                </div>

                            </div>
                        </h1>
                        <p>
                            •Username= digita el nombre de usuario.
                        </p>
                        <p>
                            •password=digita la clave del usuario.
                        </p>
                        <p>
                            •olvidaste tu contraseña= el software te permite enviar una contraseña de recuperacion al correo que te registraste.
                        </p>
                        <p class="small">
                            <strong>Best regards, Anthony Smith </strong>
                        </p>
                    </div>
                    <!-TERMINA TAB3->
                    <div id="tab-6" class="tab-pane">
                        <div class="small text-muted">
                            <i class="fa fa-clock-o"></i> Tuesday, 15 May 2014, 10:32 am
                        </div>
                        <h1>
                            MODULOS DEL SISTEMA
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="img/modulos.jpg">
                                    </div>
                                </div>

                            </div>
                                        </h1>
                                        <h4>
                                            modulos del sistema
                                        </h4>
                                        <p>
                                            •compras= se gestiona las compras .
                                        </p>
                                        <p>
                                            •productos=de gestiona los productos.
                                        </p>
                                        <p>
                                            •clientes= se gestiona los clientes.
                                        </p>
                                        <p>
                                            •provedores= se gestiona los proveedores.
                                        </p>
                                        <p>
                                            •venta= se gestiona las ventas.
                                        </p>
                                        <p>
                                            •reportes=se puede mostrar los reportes personalizados de los que se desea.
                                        </p>
                        <p class="small">
                            <strong>Best regards, Anthony Smith </strong>
                        </p>
                        <!-comienza  TAB7->

                    </div>
                    <!-COMIENZA TAB7->
                    <div id="tab-7" class="tab-pane">
                        <div class="small text-muted">
                            <i class="fa fa-clock-o"></i> Tuesday, 15 May 2014, 10:32 am
                        </div>
                        <h1>
                            PREGUNTAS FRECUENTES
                        </h1>
                        <H3>1.-PARA QUE ME SIRVE UN ERP?</H3>
                        <P>R: para planificar los recursos de tu empresa y tener un control y integrar la informacion que producen las diferentes areas de la empresa o negocio</P>
                        <H3>2.-PARA QUE TIPO DE EMPRESA ES ADECUADO EL SOFTWARE?</H3>
                        <P>R: orientado a empresas que comercializan productos. </P>
                        <H3>3.-POR QUE USAR UN SOFTWARE SI PUEDO USAR MI CUADERNO?</H3>
                        <P>R: por que la informacion esta automatizada, ademas de que el software puede almacenar y procesar grandes volumenes de informacion. </P>

                        <!-comienza  TAB7->

                    </div>
                    <!-COMIENZA TAB4->
                    <div id="tab-4" class="tab-pane">
                        <div class="small text-muted">
                            <i class="fa fa-clock-o"></i> Tuesday, 15 May 2014, 10:32 am
                        </div>
                        <h1>
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="img/backup.jpg">
                                    </div>
                                </div>

                            </div>
                        </h1>
                        <h3>¿Qué es y cómo funciona el software backup?</h3>
                        <p>Llega un momento en la vida de todo usuario informático en el que se ve obligado a efectuar un backup. De hecho, este es el nombre con el que se conoce, en inglés, a las copias de seguridad y a su aplicación, algo que la mayoría de sistemas operativos ya realizan de manera automática. Aquí queremos explicarte todo lo relacionado con él para que lo entiendas mejor y sepas cómo puede serte de utilidad en muchos momentos.</p>
                        <h3>Pero ¿qué es una copia de seguridad?</h3>
                        <p>Antes de nada, queremos definir con exactitud qué es una copia de seguridad ya que se trata de un concepto que, en muchas ocasiones, provoca confusión en los usuarios. En concreto, se trata de una copia de los datos de un equipo que se realiza en un soporte ajeno a su propia infraestructura o de forma virtual, lo que permite recuperarlos en caso de que, por cualquier problema, estos se pierdan. Este es el motivo por el que suelen guardarse en discos duros externos, CD o, incluso, en la nube, lo que es cada vez más habitual.</p>
                        <h3>¿Cómo funciona el software backup?</h3>
                        <p>Por ejemplo, imagina que dispones de un programa informático que se encarga, cada 24 horas, un plazo de tiempo bastante recurrente cuando se trata de equipos destinados a un uso comercial, de hacer una copia de seguridad del sistema y de los archivos que están almacenados en el equipo. Después, la guarda en una plataforma de almacenamiento online o en la nube.
                            Al llegar una mañana y encender el equipo, el usuario se da cuenta de que este no funciona correctamente por culpa de un virus que lo ha infectado. O, directamente, debido a que su disco duro se ha estropeado, ni siquiera enciende. En caso de que eso suceda, solo tendrá que acceder, mediante otro ordenador, a la copia de respaldo que se almacenase el día anterior para poder descargarla en otro disco duro.</p>
                        <h3>El proceso de restauración</h3>
                        <p>Generalmente, el proceso por el cual se recuperan los datos almacenados en el disco duro de un ordenador mediante el sistema de copia de respaldo se llama restauración. En concreto, este se define como la acción de leer el contenido y de grabar en la ubicación que corresponda los archivos que se han almacenado en ella. Lo normal es que se pierdan, incluso así, algunos datos, aunque suelen ser cantidades mínimas.</p>
                        <!-comienza  TAB7->

                    </div>


                </div>
            </div>
        </div>
    </div>
   



</div>
</div>
</div>
</div>

@endsection