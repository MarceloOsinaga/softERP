@extends('layouts.admin')

@section('content')
<div class="col-lg-12 panel-info">
		<div class="ibox float-e-margins">
			<div class="ibox-title panel-success">
				<h5>Nueva Area </h5>
				<div class="ibox-tools ">
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
			<div class="ibox-content">
			
				<a href="{{ route('empleados.index') }}" class="btn btn-info pull-right">Regresar
				</a>
				<br>
				<hr>
					<p>Nombre :</p>
					<p>{{ $empleado->nombre }}</p>
					<p>Apellido Paterno :</p>
					<p>{{ $empleado->apaterno }}</p>
					<p>Apellido Materno :</p>
					<p>{{ $empleado->amaterno }}</p>
					<p>Sucursal :</p>
					<p>{{ $empleado->sucursal->nombre }}</p>
					<p>Area :</p>
					<p>{{ $empleado->area->nombre }}</p>
					
				<br>
				<hr>
					<a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary">
						Editar
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection