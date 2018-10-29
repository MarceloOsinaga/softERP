<div class="form-group">
	{{ Form::label('nombre', 'Nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripcion de la categoria') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
</div>
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>