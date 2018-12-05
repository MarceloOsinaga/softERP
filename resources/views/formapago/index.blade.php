@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title panel-success">
            <h5>Formas de pago </h5>
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
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group">
                        @can('formapago.create')
                        <a href="{{ route('formapago.create') }}" 
                        class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i> Nueva forma de pago
                        </a>
                        @endcan
                        
                    </div>
                </div>
            </div>

            @include('formapago.search')
            <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Descripcion</th>
                                <th colspan="2">ACCION</th>
                            </tr>
                        </thead>

                        <tbody>                            
                            @foreach($formapago as $formapago)
                            
                            <tr>
                                <td>{{ $formapago->id }}</td>
                                <td>{{ $formapago->descripcion }}</td>
                                
                                <!-- icono de ver detalles -->
                                @can('formapago.show')
                                <td width="10px">
                                    <a href="{{ route('formapago.show', $formapago->id) }}" 
                                    class="btn btn-sm btn-primary btn-circle">
                                    <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                @endcan
                                <!-- icono de editar -->
                                @can('formapago.edit')
                                <td width="10px">
                                    <a href="{{ route('formapago.edit', $formapago->id) }}" 
                                    class="btn btn-info btn-circle">
                                    <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                @endcan
                                <!-- icono de eliminar -->
                                @can('formapago.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['formapago.destroy', $formapago->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn  btn-sm btn-danger btn-circle">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                    
            </div>

        </div>
    </div>
</div>
@endsection