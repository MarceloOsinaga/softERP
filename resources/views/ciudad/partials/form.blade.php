
<div class="col-lg-6">
	<div class="form-group">
		{{ Form::label('nombre', 'Nombre') }}
		{{ Form::text('nombre', null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="col-lg-6">
	<div class="form-group">
			{{--	{!! Form::label('id_sucursal', 'Sucursal :') !!}
				@foreach($sucursals as $sucursal)
				{!! Form::select('id_sucursal',[{{$sucursal->id}}=>{{$sucursal->nombre}}],null, ['class' => 'form-control',]) !!}
				@endforeach--}}
				{!! Form::label('id_pais', 'Pais :') !!}
				<select name="id_pais" required="" class="form-control">
						<option>Seleccione un Pais</option>
						@foreach($pais as $pa)
							<option value="{{$pa->id}}">{{$pa->nombre}}</option>
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
