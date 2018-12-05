@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title panel-success">
            <h5>Clientes </h5>
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
                        @can('clientes.create')
                        <a href="{{ route('clientes.create') }}" 
                        class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i> Nuevo Cliente
                        </a>
                        @endcan

                    </div>
                </div>
                @include('cliente.search')
            </div>
            
                       

             <div class="ibox-content" >

                <h3>REPORTE: </h3>

            <form   action="{{ url('sacarPdf') }}"  method="post"  >
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                
                 <div class="row">


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Nombre Completo</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="checkbox" class="form" name="direccion" id="direccion" value="1" checked>Direccion<br> 
                                            </div>
                                        </div>
                                     
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="checkbox" class="form" name="sexo"  id="sexo"  value="1" checked>Sexo<br> 
                                            
                                                <select id="sexoSelect" name="sexoSelect" class="form-control" required>
                                                        
                                                        <option value="A">Ambos</option>
                                                        <option value="M">Masculino</option>
                                                        <option value="F">Femenino</option>
                                                
                                                </select> 
                                            </div>
                                        </div>



                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="checkbox" class="form" name="celular"  id="celular"  value="1" checked>Celular<br> 
                                            </div>
                                        </div>


                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="checkbox" class="form" name="correo"  id="correo"  value="1" checked>Correo<br> 
                                            </div>
                                        </div>

                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="checkbox" class="form" name="estado"  id="estado"  value="1" checked>Estado<br> 
                                            </div>
                                        </div>



                                          
                                     
                                         <button type="submit" class="btn btn-primary">Pdf</button>
                                    </div>
                        
                </form>
             

            <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>AP. PATERNO</th>
                                <th>AP. MATERNO</th>
                                <th>DIRECCION</th>
                                <th>SEXO</th>
                                <th>CELULAR</th>
                                <th>CORREO @</th>
                                <th>ESTADO</th>
                                <th colspan="2">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->apaterno }}</td>
                                <td>{{ $cliente->amaterno }}</td>
                                <td>{{ $cliente->direccion }}</td>
                                <td>{{ $cliente->sexo }}</td>
                                <td>{{ $cliente->celular}}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->estado }}</td>
                                @can('clientes.show')
                                <td width="10px">
                                    <a href="{{ route('clientes.show', $cliente->id) }}" 
                                    class="btn btn-sm btn-primary btn-circle">
                                    <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('clientes.edit')
                                <td width="10px">
                                    <a href="{{ route('clientes.edit', $cliente->id) }}" 
                                    class="btn btn-info btn-circle">
                                    <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('clientes.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 
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
                    {{ $clientes->render() }}
            </div>
        </div>
    </div>
</div>
@endsection