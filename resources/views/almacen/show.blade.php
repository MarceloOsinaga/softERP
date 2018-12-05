@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title panel-success">
                <h5>Categoria </h5>
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
                        <p><strong>Nombre</strong>     {{ $categoria->nombre }}</p>                     
                    <p><strong>Descripcion</strong>     {{ $categoria->descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection