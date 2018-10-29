<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Soft | ERP v.1</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">


    <link href="{{asset('css/plugins/dropzone/basic.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/dropzone/dropzone.css')}}" rel="stylesheet">


    <link href="{{asset('css/plugins/iCheck/custom.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    

</head>
{{--skin-3--}}


<style>
.Tamaño9 {font-size: 9px;}.Tamaño10 {font-size: 10px;}.Tamaño11{font-size: 11px;}
.Tamaño12 {font-size: 12px;}.Tamaño13 {font-size: 13px;}.Tamaño14 {font-size: 15px;}
.Tamaño16 {font-size: 16px;}.Tamaño17 {font-size: 17px;}.Tamaño18 {font-size: 18px;}
.Tamaño25 {font-size: 25px;}

.fuente1{font-family: sans-serif}
.fuente2{font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif}
.fuente3{font-family: 'Times New Roman', Times, serif}
.fuente4{font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif}
</style>
<body class="{{ Auth::user()->tema}} {{ Auth::user()->tafuente}} {{ Auth::user()->fuente}}">
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('img/profile_small.jpg')}}" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->email }}</strong>
                             </span> <span class="text-muted text-xs block">{{ Auth::user()->name }} <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Mailbox</a></li>
                            <li class="divider"></li>
                            <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="">
                    <a href=""><i class="fa fa-home"></i> 
                        <span class="nav-label">Inicio</span> 
                       </a>
    
                </li>
               
                <li>
                    <a href="#"><i class="fa fa-truck"></i> <span class="nav-label">Compras</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Orden de Compra</a></li>
                        <li><a href="#">Nueva Compra</a></li>
                        <li><a href="#">Administrar Compras</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cube"></i> <span class="nav-label">Productos</span><span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse">
                        <li><a href="{{route('categorias.index')}}">Categoria</a></li>
                        <li><a href="#">Nueva Compra</a></li>
                        <li><a href="#">Administrar Compras</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="{{route('clientes.index')}}"><i class="fa fa-user"></i> <span class="nav-label">Clientes</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cube"></i> <span class="nav-label">Recursos Humanos</span><span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level collapse">
                        <li><a href="{{route('departamentos.index')}}">Departamento</a></li>
                        <li><a href="{{route('cargos.index')}}">Cargo</a></li>
                        <li><a href="#">Empleado</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="{{ route('proveedors.index') }}"><i class="fa fa-suitcase"></i> <span class="nav-label">Proveedores</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-usd"></i> <span class="nav-label">Venta </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Facturacion</a></li>
                        <li><a href="#">Administrar Facturas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#"></a></li>
                        <li><a href="#">Administrar Facturas</a></li>
                    </ul>
                </li>
                <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Sucursales</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ route('paiss.index') }}">Lista de Pais</a></li>
                            <li><a href="#">Lista de Ciudades</a></li>
                            <li><a href="#">Lista de sucursales</a></li>
                        </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cog"></i> <span class="nav-label">Configuracion </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Nueva Venta</a></li>
                        <li><a href="#">Administrar Facturas</a></li>
                    </ul>
                </li>
               
                <li>
                    <a href="#"><i class="fa fa-lock"></i> <span class="nav-label">Seguridad</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        @can('users.index')
                        <li><a href="{{route('users.index')}}">Usuarios</a></li>
                        @endcan
                        @can('roles.index')
                        <li><a href="{{route('roles.index')}}">Roles</a></li>
                        @endcan
                        <li><a href="#">Permisos</a></li>
                    </ul>
                </li>
                <li class="special_link">
                    <a href="{{route('backup.index')}}"><i class="fa fa-database"></i> <span class="nav-label">Base de Datos</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">SoftERP.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-star"></i>  <span class="label label-warning">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Mi Lista de Favoritos
                                        <span class="pull-right text-muted small">......</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                               {{-- @foreach ($favoritos as $favorito)
                                    
                               
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> {{$favorito->nombre}}
                                        <span class="pull-right text-muted small">...</span>
                                    </div>
                                </a>
                                @endforeach--}}
                            </li>
                            
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <div class="wrapper wrapper-content">
      
        <div class="row">
                {{--SESION DE CONTENIDO--}}
                @yield('content')

        {{--<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Basic Data Tables example with responsive plugin</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                    </thead>
                    <tbody>
                 
                    <tr class="gradeU">
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="center">-</td>
                        <td class="center">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Editar</a></li>
                                    <li> <button class="btn btn-info btn-circle" type="button"><i class="fa fa-check"> Crear</i>
                                    </button></li>
                                    <li><a href="#">Eliminar</a></li>
                                    <form method="post">
                                        <button type="submit" class="btn btn-info btn-circle">
                                            <i class="fa fa-check">
                                        </button>
                                    </form>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>--}}
            
        </div>

        <div class="footer">
            <div class="pull-right">
                <strong></strong>.
            </div>
            <div>
                <strong>Copyright</strong> SoftERP &copy; 2018-2019
            </div>
        </div>
        </div>
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-2">

                    <li class="active"><a data-toggle="tab" href="#tab-3">
                        <i class="fa fa-gear"></i>
                    </a></li>
                    <li class=""><a data-toggle="tab" href="#tab-1">
                        Notes
                    </a></li>
                    
                </ul>

                <div class="tab-content">


                    <div id="tab-1" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                            <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                        </div>

                        <div>

                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">

                                        There are many variations of passages of Lorem Ipsum available.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                           
                        </div>

                    </div>
                    <div id="tab-3" class="tab-pane active">

                        <div class="sidebar-title">
                            <h3><i class="fa fa-gears"></i> Settings</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <div class="setings-item">
                        {!!Form::model(Auth()->user(),['route'=>['hom.update',Auth()->user()->id],'method'=>'PATCH'])!!}
                        {{--<form action="{{ route('hom.update',Auth()->user()->id)}}" method="PATCH">--}}
                            
                            <strong>El Tema es :..{{ Auth::user()->tema}}</strong>
                            <select class="form-control m-b" name="tema">
                                    <option value="skin-0">Tema 1</option>
                                    <option value="skin-1">Tema 2</option>
                                    <option value="skin-2">Tema 3</option>
                                    <option value="skin-3">Tema 4</option>
                            </select>
                            <strong> El tamaño de F. es :{{ Auth::user()->tafuente}}</strong>
                            <select class="form-control m-b" name="tafuente">
                                    <option value="Tamaño14">14</option>
                                    <option value="Tamaño15">15</option>
                                    <option value="Tamaño16">16</option>
                                    <option value="Tamaño17">17</option>
                                    <option value="Tamaño25">25</option>
                            </select>
                            <strong>La fuente es :..{{ Auth::user()->fuente}}</strong>
                            <select class="form-control m-b" name="fuente">
                                    <option value="fuente1">Fuente 1</option>
                                    <option value="fuente1">Fuente 2</option>
                                    <option value="fuente1">Fuente 3</option>
                                    <option value="fuente1">Fuente 4</option>
                            </select>

                        
				        <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Actualizar</button>
                        {{--</form>   --}}
                        {!! Form::close() !!}                
                    </div>
                    </div>
                </div>

            </div>



        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.symbol.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.time.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

    <!-- Datatable -->
    <script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- Jvectormap -->
    <script src="{{asset('js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- EayPIE -->
    <script src="{{asset('js/plugins/easypiechart/jquery.easypiechart.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>

    <!-- DROPZONE -->
    <script src="{{asset('js/plugins/dropzone/dropzone.js')}}"></script>
 <!-- chec -->
    <script src="{{asset('js/plugins/iCheck/icheck.min.js')}}"></script>

    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

         Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)"
        };

        $(document).ready(function(){

            var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code3"), {
                lineNumbers: true,
                matchBrackets: true
            });

       });
       $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
        });
        
</script>

</body>
</html>
