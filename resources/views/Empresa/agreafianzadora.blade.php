@extends('layouts.panel')

@section('contenido')
<h3>Formulario para agregar una afianzadora</h3>
<div class="row clearfix">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Nombre afianzadora">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Descripción afianzadora">
            </div>
        </div>
    </div>
   
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Numero afianzadora">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="$ Monto">
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <label for="start">Fecha</label>
                <input type="Date" class="form-control" placeholder="Fecha">
            </div>
        </div>
    </div>
</div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-raised g-bg-blush2">Agregar</button>
        <button type="submit" class="btn btn-raised btn-default">Cancelar</button>
    </div>


    
@endsection