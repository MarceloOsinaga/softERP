@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title panel-success">
            <h5>Ciudades </h5>
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
                        @can('categorias.create')
                        <a href="{{ route('ciudads.create') }}" 
                        class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i> Nueva Ciudad
                        </a>
                        @endcan
                        
                    </div>
                </div>
            </div>
            @include('ciudad.search')
            <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Pais</th>
                                <th colspan="2">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($ciudads as $ciudad)
                           
                            <tr>
                                <td>{{ $ciudad->nombre }}</td>
                                <td>{{ $ciudad->pais->nombre }}</td>
                                @can('ciudads.edit')
                                <td width="10px">
                                    <a href="{{ route('ciudads.edit', $ciudad->id) }}" 
                                    class="btn btn-info btn-circle">
                                    <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('ciudads.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['ciudads.destroy', $ciudad->id], 
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
                    {{ $ciudads->render() }}
            </div>
        </div>
    </div>
</div>
@endsection