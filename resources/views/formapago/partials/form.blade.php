<div class="form-group">
	{{ Form::label('descripcion', 'Descripcion') }}
	{{ Form::text('descripcion', null, ['class' => 'form-control']) }}
</div>
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>