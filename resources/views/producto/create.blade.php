@extends('layouts.admin')

@section('content')
@include('empleado.partials.info')
<div class="col-lg-12 panel-info">
		<div class="ibox float-e-margins">
			<div class="ibox-title panel-success">
				<h5>Nuevo Producto </h5>
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
			
				<a href="{{ route('productos.index') }}" class="btn btn-info pull-right">Regresar
				</a>
				<br>
				<hr>
			
		
					@include('producto.partials.errors')
					{!! Form::open(['route' => 'productos.store']) !!}
						
						@include('producto.partials.form')
						
					{!! Form::close() !!}
				</div>
			</div>
		</div>


				
@endsection