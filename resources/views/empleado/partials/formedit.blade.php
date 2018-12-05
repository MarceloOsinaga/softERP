
<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre :') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('apellido_Paterno', 'Apellido Paterno :') !!}
        {!! Form::text('apellido_Paterno', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('apellido_Materno', 'Apellido Materno :') !!}
        {!! Form::text('apellido_Materno', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
            {!! Form::label('ci', 'Ci :') !!}
            {!! Form::number('ci', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
            {!! Form::label('telefono', 'Telefono :') !!}
            {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
            {!! Form::label('direccion', 'Direccion :') !!}
            {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
    </div>
    </div>

<div class="col-lg-6">
    <div class="form-group">
            {!! Form::label('sexo', 'Genero :') !!}
            {!! Form::select('sexo',['M'=>'Masculino','F'=>'Femenino'],null, ['class' => 'form-control',]) !!}
            
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
                {!! Form::label('estado_Civil', 'Estado Civil :') !!}
                {!! Form::select('estado_Civil',['S'=>'Soltero',
                                                'C'=>'Casado',
                                                'D'=>'Diborciado'
                                                ]
                ,null, ['class' => 'form-control',]) !!}
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
                {!! Form::label('email', 'Email :') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('fecha_Nacimiento', 'Fecha de Nasimiento :') !!}
        {!! Form::date('fecha_Nacimiento', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
            {{--	{!! Form::label('id_sucursal', 'Sucursal :') !!}
                @foreach($sucursals as $sucursal)
                {!! Form::select('id_sucursal',[{{$sucursal->id}}=>{{$sucursal->nombre}}],null, ['class' => 'form-control',]) !!}
                @endforeach--}}
                {!! Form::label('id_Cargo', 'Cargo :') !!}
                <select name="id_Cargo" required="" class="form-control">
                        <option>Seleccione una Sucursal</option>
                        {{--@foreach($cargos as $cargo)
                            <option value="{{$cargo->id}}">{{$cargo->nombre}}</option>
                        @endforeach--}}



                        @foreach($cargos as $cargo)
                            @if($cargo->id == $cargo->id)
                                <option value="{{ $cargo->id }}" selected>
                                    {{ $cargo->nombre }}
                                </option>
                            @else
                                <option value="{{ $cargo->id }}">
                                    {{ $cargo->nombre }}
                                </option>
                            @endif
                        @endforeach
                </select>
                
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
                {!! Form::label('id_Dpto', 'Departamento :') !!}
                <select name="id_Dpto" required="" class="form-control">
                        <option>Seleccione una Area</option>
                        {{--@foreach($departamentos as $departamento)
                            <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                        @endforeach--}}


                        @foreach($departamentos as $departamento)
                            @if($departamento->id == $departamento->id)
                                <option value="{{ $departamento->id }}" selected>
                                    {{ $departamento->nombre }}
                                </option>
                            @else
                                <option value="{{ $departamento->id }}">
                                    {{ $departamento->nombre }}
                                </option>
                            @endif
                        @endforeach
                </select>
    </div>
</div>

    

<div class="form-group">
{!! Form::submit('ENVIAR', ['class' => 'btn btn-success']) !!}
</div>




