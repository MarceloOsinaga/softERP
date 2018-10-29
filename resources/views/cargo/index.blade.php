@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title panel-success">
            <h5>Cargo </h5>
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
                        @can('cargos.create')
                        <a href="{{ route('cargos.create') }}" 
                        class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i> Nuevo Cargo
                        </a>
                        @endcan
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 pull-right">
                    <div class="input-group">
                        <input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                        <button type="button" class="btn btn-sm btn-primary"> Buscar!</button> </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th colspan="2">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($cargos as $cargo)
                            @if ($cargo->estado == 1)
                            <tr>
                                <td>{{ $cargo->nombre }}</td>
                                <td>{{ $cargo->descripcion }}</td>
                                @can('cargos.show')
                                <td width="10px">
                                    <a href="{{ route('cargos.show', $cargo->id) }}" 
                                    class="btn btn-sm btn-primary btn-circle">
                                    <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('cargos.edit')
                                <td width="10px">
                                    <a href="{{ route('cargos.edit', $cargo->id) }}" 
                                    class="btn btn-info btn-circle">
                                    <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('cargos.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['cargos.destroy', $cargo->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn  btn-sm btn-danger btn-circle">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endif
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                    {{ $cargos->render() }}
            </div>
        </div>
    </div>
</div>
@endsection