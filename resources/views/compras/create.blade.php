@extends ('layouts.admin')
@section ('content')

<div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title panel-success">
                <h5>Nuevo ingreso </h5>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors -> all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content" >
                <div class="panel-body">                    
                        {{Form::open(array('url' => 'compras/store', 'method' => 'POST', 'autocomplete' => 'off'))}}
                                {{Form::token()}}
                        
                            <!-- Checbook del Proveedor-->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">            
                                    <label for="nombre">Proveedor:</label>
                                    <select name="id_proveedor" id="id_proveedor" class="form-control selectpicker" data-Live-search="true">
                                        @foreach($proveedors as $proveedor)
                                            <option value="{{$proveedor -> id}}">{{$proveedor -> nombreproveedor}} </option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>   
                            </div>
                        
                            <!-- Panel de datos-->
                            <div class="row">       
                            <div class="panel panel-primary">
                                <div class="panel-body">
                        
                                    <!-- Checbook de Producto-->
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="">Producto</label>
                                                <select class="form-control selectpicker" name="pid_producto" id="pid_producto" data-Live-search="true">
                                                    @foreach($productos as $producto)
                                                        <option value="{{$producto -> id}}">{{$producto -> producto}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>
                        
                                    <!-- buson de cantidad-->
                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                            <div class="form-group">            
                                            <label for="cantidad">Cantidad:</label>
                                                <input type="number" class="form-control" name="pcantidad" id="pcantidad" placeholder="cantidad">            
                                            </div>
                                        </div>
                        
                                        <!-- buson de Precio de compra-->
                                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                            <div class="form-group">            
                                            <label for="cantidad">Precio de compra:</label>
                                                <input type="number" class="form-control" name="pprecio" id="pprecio" placeholder="P.compra">            
                                            </div>
                                        </div>
                                        
                                        <!-- boton Agregar-->
                                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                            <div class="form-group">            
                                            <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
                                            </div>
                                        </div>
                        
                                        <!-- Tabla de productos a comprar-->
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                                <thead style="background-color: #A9D0F5">
                                                    <th>Opciones</th>
                                                    <th>Producto</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio compra</th>
                                                    <th>Subtotal</th>
                                                    <th>Total</th>
                                                </thead>
                                                <tfoot>
                                                    <th>TOTAL</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th><h4 id="total">S/. 0.00</h4></th>
                                                </tfoot>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="guardar">
                                <div class="form-group">
                                    <input name="_token" value="{{csrf_token()}}" type="hidden">
                                    <button class="btn btn-primary" type="submit">Comprar</button>
                                    <button class="btn btn-danger" type="reset">Cancelar</button>
                                    </div>  
                                </div>
                            </div>                
                            {{ Form::close() }}
                                
                </div>

            </div>
        </div>
    </div>


@push('scripts')
<script>
    $(document).ready(function(){
        
        $('#bt_add').click(function(){
            agregar();
        })
    });
    
    //variables
    var cont =0;
    total = 0;
    subtotal=[];
    $('#guardar').hide();
    
    
    function agregar(){
        id_producto = $('#pid_producto').val();
        producto = $('#pid_producto option:selected').text();
        cantidad = $('#pcantidad').val();
        precio = $('#pprecio').val();
       
        console.log(cantidad);
      
        
        
        if(id_producto != "" && cantidad != "" && cantidad > 0 && precio != "" )
        {
            subtotal[cont] = (cantidad * precio);
            total = total + subtotal[cont];
            
            var fila = '<tr class="selected" id="fila'+cont+'"><td><button class"btn btn-warning" type"button" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="id_producto[]" value="'+id_producto+'">'+producto+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio[]" value="'+precio+'"></td><td>'+subtotal[cont]+'</td></tr>';
            
            //aumentar el contador
            cont++;
            
            //limpiar los controles
            limpiar();
                      
            //indicar el subtotal
            $('#total').html('s/. '+total);
            
            //mostrar los botones de guardar y cancelar
            evaluar();
            
            //agregar la fila a la tabla
            $('#detalles').append(fila);
        }
        else
        {
            alert('Error al ingresar el detalle del ingreso, revise los datos del producto');    
        }
        
    }
    
    
    function limpiar(){
        $('#pcantidad').val('');
        $('#pprecio').val('');
        
    }
    
    function evaluar(){
        if (total > 0)
        {
            $('#guardar').show();
        }
        else
        {
            $('#guardar').hide();
        }
    }
    
    function eliminar(index){
        total = total- subtotal[index];
        $('#total').html('s/. '+total);
        $('#fila' + index).remove();
        evaluar();
    }
</script>
@endpush       

@endsection