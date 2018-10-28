@extends('layouts.admin')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Realizar Backup y Restore de la Base de Datos del Sistema</h5>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
                    <div class="d-flex flex-row-reverse">
                        <a href="{{ route('backup.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Realizar Backup</a>
                      {{--  <button class="btn btn-info btn-rounded btn-block btn-outline" type="button"><i class="fa fa-ruble"> Realizar Backup</i></button>
                        btn btn-info  dim btn-large-dim btn-outline--}}
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label>Cargar Archivo SQL</label>
                        <form  enctype="multipart/form-data" action="{{route('backup.store')}}" method="POST">
                            @csrf
                            <input class="form-control" id="filesql" name="filesql" aria-describedby="fileHelp" type="file">
                           
                            <br>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Restaurar DB</button>
                            {{--<button type="submit" class="btn btn-outline btn-success  dim btn-large-dim" type="button"><i class="fa fa-upload"></i></button>--}}
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</div>






@endsection