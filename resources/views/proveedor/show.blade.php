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
                    <p><strong>Proveedor/Empresa</strong>     {{ $proveedor->nombreproveedor }}</p>
                    <p><strong>Nombre de contacto</strong>   {{ $proveedor->nombrecontacto }}</p>
                    <p><strong>Direccion</strong>  {{ $proveedor->direccion }}</p>
                    <p><strong>Pais</strong>  {{ $proveedor->pais }}</p>
                    <p><strong>Ciudad</strong>  {{ $proveedor->ciudad }}</p>
                    <p><strong>Email</strong>  {{ $proveedor->email }}</p>
                    <p><strong>Tel/Cel:</strong>  {{ $proveedor->telefono }}</p>
                    <p><strong>Cargo</strong>  {{ $proveedor->cargo }}</p>
                    <p><strong>Nit o Ci.</strong>  {{ $proveedor->nit_ci }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection