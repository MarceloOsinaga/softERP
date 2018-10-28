@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title panel-success">
                <h5>Usuarios </h5>
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
            </div>
            <div class="ibox-content" >
               
                <div class="table-responsive">

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     {{ $cliente->nombre }}</p>
                    <p><strong>AP.Paterno</strong>   {{ $cliente->apaterno }}</p>
                    <p><strong>AP.Materno</strong>  {{ $cliente->amaterno }}</p>
                    <p><strong>Direccion</strong>  {{ $cliente->direccion }}</p>
                    <p><strong>Sexo</strong>  {{ $cliente->sexo }}</p>
                    <p><strong>Telefono Fijo</strong>  {{ $cliente->telefono }}</p>
                    <p><strong>Celular</strong>  {{ $cliente->celular }}</p>
                    <p><strong>Fecha de Nacimiento</strong>  {{ $cliente->fechanacimiento }}</p>
                    <p><strong>Nit o Ci.</strong>  {{ $cliente->nit_ci }}</p>
                    <p><strong>Estado</strong>  {{ $cliente->estado }}</p>
                    <p><strong>Correo Electronico</strong>  {{ $cliente->email }}</p>
                    <p><strong>Imagen</strong>  {{ $cliente->imagen }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection