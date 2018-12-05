@extends('layouts.admin')

@section('content')

	@include('empleado.partials.info')
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title panel-success">
					<h5>Empleados </h5>
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
						<div class="col-sm-3 ">
								@can('clientes.create')
								<a href="{{ route('empleados.create') }}" 
								class="btn btn-sm btn-success">
								<i class="fa fa-plus"></i> Nuevo Cliente
								</a>
								@endcan
						</div>
						
						<div class="col-sm-3 pull-right">
							<div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
								<button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
							<tr>
								<th>Nombre</th>
								<th>A.Paterno</th>
								<th>A.Materno</th>
								<th>Ci.</th>
								<th>Telefono</th>
								<th>Direccion.</th>
								<th>Genero.</th>
								<th>Estado Civil</th>
								<th>Email.</th>
								<th>Fecha Nacimiento</th>
								<th>Cargo</th>
								<th>Departamento</th>
								<th colspan="3" width="6">Accion</th>
							</tr>
							</thead>
							<tbody>
							@foreach($empleados as $empleado)
								<tr >
									<td>{{ $empleado->nombre}}</td>
									<td>{{ $empleado->apellido_Paterno}}</td>
									<td>{{ $empleado->apellido_Materno}}</td>
									<td>{{ $empleado->ci}}</td>
									<td>{{ $empleado->telefono}}</td>
									<td>{{ $empleado->direccion}}</td>
									<td>{{ $empleado->sexo}}</td>
									<td>{{ $empleado->estado_Civil}}</td>
									<td>{{ $empleado->email}}</td>
									<td>{{ $empleado->fecha_Nacimiento}}</td>
									<td>{{ $empleado->id_Cargo}}</td>
									<td>{{ $empleado->id_Dpto}}</td>
									<td width="2" >
											<a href="" class="btn btn-primary btn-circle" >
													<i class="fa fa-eye"></i>
											</a>
									</td>
									<td width="2">
											<a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-info btn-circle">
													<i class="fa fa-pencil-square-o"></i>
											</a>
									</td>
									<td width="2">
											{!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'DELETE']) !!}
												<button class="btn btn-danger btn-circle" >
														<i class="fa fa-trash-o"></i>
												</button>							
											{!! Form::close() !!}
									
								</tr>
							@endforeach
							
							</tbody>
						</table>
						
					
					</div>
					
					{!! $empleados->render() !!}
				</div>
			</div>
		</div>
@endsection