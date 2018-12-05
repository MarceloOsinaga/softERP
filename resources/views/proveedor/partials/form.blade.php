<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('nombreproveedor', 'Nombre de la Empresa Proveedora') }}
	{{ Form::text('nombreproveedor', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('nombrecontacto', 'Nombre de la persona de contacto') }}
	{{ Form::text('nombrecontacto', null, ['class' => 'form-control', 'id' => 'slug']) }}
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
	{{ Form::label('pais', 'Pais') }}
	{{ Form::text('pais', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
		{{ Form::label('ciudad', 'Ciudad') }}
		{{ Form::text('ciudad', null, ['class' => 'form-control']) }}
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
		{{ Form::label('telefono', 'Telefono') }}
		{{ Form::number('telefono', null, ['class' => 'form-control']) }}
	</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('cargo', 'Cargo') }}
	{{ Form::text('cargo', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
</div>