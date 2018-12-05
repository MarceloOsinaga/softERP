
<div class="col-lg-6">
	<div class="form-group">
		{!! Form::label('cod_barra', 'Codigo de barra :') !!}
		{!! Form::text('cod_barra', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre :') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion :') !!}
			{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('marca', 'Marca:') !!}
			{!! Form::text('marca', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-6">
		<div class="form-group">
				{!! Form::label('costo_unitario', 'Costo unitario :') !!}
				{!! Form::number('costo_unitario', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-6">
		<div class="form-group">
				{!! Form::label('precio_venta', 'Precio venta :') !!}
				{!! Form::text('precio_venta', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
				{{--	{!! Form::label('id_sucursal', 'Sucursal :') !!}
					@foreach($sucursals as $sucursal)
					{!! Form::select('id_sucursal',[{{$sucursal->id}}=>{{$sucursal->nombre}}],null, ['class' => 'form-control',]) !!}
					@endforeach--}}
					{!! Form::label('id_categoria', 'Categoria :') !!}
					<select name="id_categoria" required="" class="form-control">
							<option>Seleccione una Categoria</option>
							@foreach($categorias as $categoria)
								<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
							@endforeach
					</select>
					
		</div>
	</div>

	

		<div class="form-group pull-rig">
			{!! Form::submit('ENVIAR', ['class' => 'btn btn-success']) !!}
		</div>





