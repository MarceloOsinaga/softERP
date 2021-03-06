<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('nombre', 'Nombre del Cliente') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('apaterno', 'Apellido. Paterno') }}
	{{ Form::text('apaterno', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('amaterno', 'Apeliido. Materno') }}
	{{ Form::text('amaterno', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('direccion', 'Direccion') }}
	{{ Form::text('direccion', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{!! Form::label('sexo', 'Sexo :') !!}
	{!! Form::select('sexo',['M'=>'MASCULINO',
									'F'=>'FEMENINO']
	,null, ['class' => 'form-control',]) !!}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('telefono', 'Telefono (Of.)') }}
	{{ Form::number('telefono', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('celular', 'Celular') }}
	{{ Form::number('celular', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('fechanacimiento', 'Fecha de Nacimiento') }}
	{{ Form::date('fechanacimiento', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('nit_ci', 'Nit o Ci.') }}
	{{ Form::number('nit_ci', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
{{--<div class="form-group">
	{{ Form::label('description', 'Estado') }}
	{{ Form::text('estado', null, ['class' => 'form-control']) }}
</div>--}}
<div class="form-group">
	{!! Form::label('estado', 'Estado :') !!}
	{!! Form::select('estado',['ACTIVO'=>'ACTIVO',
									'SUSPENDIDO'=>'SUSPENDIDO']
	,null, ['class' => 'form-control',]) !!}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
 	{{ Form::label('email', 'Email') }}
 	{{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('imagen', 'Imagen') }}
	{{ Form::text('imagen',  null, ['class' => 'form-control']) }} 
</div>
</div>
<div class="col-lg-6">
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
</div>
