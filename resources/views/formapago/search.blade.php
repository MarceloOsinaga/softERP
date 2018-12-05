{!! Form::open(array('url'=>'formapago','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="row">
    <div class="col-sm-3 pull-right">
        <div class="input-group">
            <input type="text" placeholder="Search" class="input-sm form-control" name="searchText"> 
                <span type="submit" class="input-group-btn">
                <button type="submit" class="btn btn-sm btn-primary"> Buscar!</button> </span>
        </div>
    </div>
</div>

{{Form::close()}}


