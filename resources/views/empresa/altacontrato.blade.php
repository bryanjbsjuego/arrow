@extends('layouts.panel')

@section('contenido')
<h3>Formulario para agregar un contrato</h3>
<div class="card">
<div class="container-fluid">
<div class="row clearfix">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Contrato">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Nombre de la obra">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Descripción de la obra">
            </div>
        </div>
    
   
</div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Ubicación">
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <label for="start">Fecha alta</label>
                <input type="Date" class="form-control" placeholder="Fecha de alta">
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <label for="start">Fecha inicio</label>
                <input type="Date" class="form-control" placeholder="Fecha de inicio">
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <label for="start">Fecha termino</label>
                <input type="Date" class="form-control" placeholder="Fecha de termino">
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-6 col-sm-12">
        <div class="form-group drop-custum">
            <select class="form-control show-tick">
                <option value="">--Seleccionar encargado de obra--</option>
                <option value="1">Bryan</option>
                <option value="2">Isaac</option>
                <option value="3">Oscar</option>
            </select>
        </div>    
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="number" class="form-control" placeholder="Plazo de dias">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="number" step="0.01" class="form-control" placeholder="$ Importe">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="number" step="0.01" class="form-control" placeholder="Amortización">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-raised g-bg-blush2">Agregar</button>
        <button type="submit" class="btn btn-raised btn-default">Cancelar</button>
    </div>


    
@endsection