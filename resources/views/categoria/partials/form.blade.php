
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('nombre', 'Nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
	{{ Form::label('descripcion', 'Descripcion de la categoria') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
</div>
</div>
<div class="col-lg-6">
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
</div>
