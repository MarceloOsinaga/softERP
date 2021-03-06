@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title panel-success">
            <h5>paiss </h5>
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
                        @can('paiss.create')
                        <a href="{{ route('paiss.create') }}" 
                        class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i> Nuevo pais
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
                                <th>Pais</th>
                                <th colspan="2">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($paiss as $pais)
                            @if ($pais->estado == 1)
                            <tr>
                                <td>{{ $pais->nombre }}</td>
                        
                                @can('paiss.show')
                                <td width="10px">
                                    <a href="{{ route('paiss.show', $pais->id) }}" 
                                    class="btn btn-sm btn-primary btn-circle">
                                    <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('paiss.edit')
                                <td width="10px">
                                    <a href="{{ route('paiss.edit', $pais->id) }}" 
                                    class="btn btn-info btn-circle">
                                    <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('paiss.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['paiss.destroy', $pais->id], 
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
                    {{ $paiss->render() }}
            </div>
        </div>
    </div>
</div>
@endsection