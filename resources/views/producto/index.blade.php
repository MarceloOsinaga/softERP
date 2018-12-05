@extends('layouts.admin')

@section('content')

	@include('empleado.partials.info')
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title panel-success">
					<h5>Productos </h5>
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
								@can('productos.create')
								<a href="{{ route('productos.create') }}" 
								class="btn btn-sm btn-success">
								<i class="fa fa-plus"></i> Nuevo producto
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
								<th>Cod. Barra</th>
								<th>Nombre</th>
								<th>Descripcion</th>
								<th>Marca</th>
								<th>Costo Unitario</th>
								<th>Precio Venta.</th>
								<th>Categoria.</th>
								<th colspan="3" width="6">Accion</th>
							</tr>
							</thead>
							<tbody>
							@foreach($productos as $producto)
								<tr >
									<td>{{ $producto->codigo_barra}}</td>
									<td>{{ $producto->nombre}}</td>
									<td>{{ $producto->descripcion}}</td>
									<td>{{ $producto->marca}}</td>
									<td>{{ $producto->costo_unitario}}</td>
									<td>{{ $producto->precio_venta}}</td>
									<td>{{ $producto->estado}}</td>
									<td>{{ $producto->id_categoria}}</td>
									
									<td width="2" >
											<a href="" class="btn btn-primary btn-circle" >
													<i class="fa fa-eye"></i>
											</a>
									</td>
									<td width="2">
											<a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-info btn-circle">
													<i class="fa fa-pencil-square-o"></i>
											</a>
									</td>
									<td width="2">
											{!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'DELETE']) !!}
												<button class="btn btn-danger btn-circle" >
														<i class="fa fa-trash-o"></i>
												</button>							
											{!! Form::close() !!}
									
								</tr>
							@endforeach
							
							</tbody>
						</table>
						
					
					</div>
					
					{!! $productos->render() !!}
				</div>
			</div>
		</div>
@endsection