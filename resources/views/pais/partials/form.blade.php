<div class="form-group">
	{{ Form::label('nombre', 'Nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}

	<a href="{{ route('paiss.index') }}" 
        class="btn btn-sm btn-success">
        <i class="fa fa-reply"></i> Atras
	</a>
</div>