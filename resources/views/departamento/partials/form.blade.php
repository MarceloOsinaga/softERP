<div class="form-group">
	{{ Form::label('nombre', 'Nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripcion del Departamento') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
</div>
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}

	<a href="{{ route('departamentos.index') }}" 
        class="btn btn-sm btn-success">
        <i class="fa fa-reply"></i> Atras
	</a>
</div>