@extends ('layouts.admin') 
@section ('content')

<div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title panel-success">
                    <h5>Nueva Compra </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>

                    <div class="row">
                            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                 <a href="compras/create"><button class="btn btn-success">Nuevo</button></a>
                                 @include('compras.search') </div>
                        </div>
                        <div class="row">
                           
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3>Listado de Compras</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <thead>
                                            <th>ID</th>
                                            <th>Estado</th>
                                            <th>Fecha de Emision</th>
                                            <th>Proveedor</th>
                                            <th>Costo total</th>                   
                                            <th>Opciones</th>
                                        </thead>
                                        @foreach($orden_compras as $ing)
                                        <tr>
                                            <td>{{$ing -> id}}</td>
                                            <td>{{$ing -> estado}}</td>
                                            <td>{{$ing -> fecha_Emision}}</td>
                                            <td>{{$ing -> nombreproveedor}}</td>
                                            <td>{{$ing -> total}}</td>                  
                                            <td>
                                                <a href="{{URL::action('CompraController@show', $ing -> id)}}">
                                                    <button class="btn btn-primary">Detalles</button>
                                                </a>
                                            </td>
                                        </tr> 
                                        {{--@include('compras.modal')--}}
                                        @endforeach </table>
                                </div>
                                 {{$orden_compras -> render()}}
                            </div>
                        </div>
            </div>
             
        </div>
</div>



@endsection