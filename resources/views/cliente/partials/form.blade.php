<div class="form-group">
	{{ Form::label('nombre', 'Nombre del Cliente') }}
	{{ Form::text('nomnre', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('', 'Ap. Paterno') }}
	{{ Form::text('apaterno', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Ap. Paterno') }}
	{{ Form::text('amaterno', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Direccion') }}
	{{ Form::text('direccion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{!! Form::label('sexo', 'Sexo :') !!}
	{!! Form::select('sexo',['M'=>'MASCULINO',
									'F'=>'FEMENINO']
	,null, ['class' => 'form-control',]) !!}
</div>
<div class="form-group">
	{{ Form::label('description', 'Telefono (Of.)') }}
	{{ Form::number('telefono', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Celular') }}
	{{ Form::number('celular', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Fecha de Nacimiento') }}
	{{ Form::date('fechanacimiento', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Nit o Ci.') }}
	{{ Form::number('nit_ci', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Estado') }}
	{{ Form::text('estado', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
 	{{ Form::label('special', 'Email') }}
 	{{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('special', 'Imagen') }}
	{{ Form::text('imagen',  null, ['class' => 'form-control']) }} 
</div>
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>