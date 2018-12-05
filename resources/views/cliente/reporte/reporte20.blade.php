<h4 class="box-title">CLIENTES</h4>	   

<div class="box-body box-white">

    <div class="table-responsive" >

	    <table  class="table table-hover table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>AP. PATERNO</th>
                                <th>AP. MATERNO</th>
                                <th>DIRECCION</th>
                                
                                <th>CELULAR</th>
                                <th>CORREO @</th>
                                <th>ESTADO</th>
                     
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->apaterno }}</td>
                                <td>{{ $cliente->amaterno }}</td>
                                <td>{{ $cliente->direccion }}</td>
                              
                                <td>{{ $cliente->celular}}</td>
                                <td>{{ $cliente->email }}</td>
                  	           <td>{{ $cliente->estado }}</td>
                             


                
            
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
            </div>

       </div>