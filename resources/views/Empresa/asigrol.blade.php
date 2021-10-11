@extends('layouts.panel')

@section('contenido')
<h3>Formulario para asignar un rol</h3>
<div class="row clearfix">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Nombre rol">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Descripción del rol">
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-sm-12">
        <button type="submit" class="btn btn-raised g-bg-blush2">Confirmar</button>
        <button type="submit" class="btn btn-raised btn-default">Cancelar</button>
    </div>


    
@endsection