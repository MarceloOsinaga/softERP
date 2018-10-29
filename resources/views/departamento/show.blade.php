@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title panel-success">
                <h5>Departamentos</h5>
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

                <div class="panel-body">                   
                        <p><strong>Nombre</strong>     {{ $departamento->nombre }}</p>                     
                    <p><strong>Descripcion del departamento</strong>     {{ $departamento->descripcion }}</p>
                </div>
                <a href="{{ route('departamentos.index') }}" 
                    class="btn btn-sm btn-success">
                     <i class="fa fa-reply"></i> Atras
	            </a>
            </div>
        </div>
    </div>
</div>
@endsection