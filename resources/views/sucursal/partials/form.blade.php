
<div class="col-lg-6">
	<div class="form-group">
		{{ Form::label('nombre', 'Nombre') }}
		{{ Form::text('nombre', null, ['class' => 'form-control']) }}
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
			{{--	{!! Form::label('id_sucursal', 'Sucursal :') !!}
				@foreach($sucursals as $sucursal)
				{!! Form::select('id_sucursal',[{{$sucursal->id}}=>{{$sucursal->nombre}}],null, ['class' => 'form-control',]) !!}
				@endforeach--}}
				{!! Form::label('id_ciudad', 'Ciudad :') !!}
				<select name="id_ciudad" required="" class="form-control">
						<option>Seleccione una Ciudad</option>
						@foreach($ciudads as $ciudad)
							<option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
						@endforeach
				</select>
				
	</div>
</div>
<div class="col-lg-6">
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
</div>
