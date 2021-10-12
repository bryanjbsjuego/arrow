@extends('layouts.panel')

@section('contenido')
<h3>Formulario para asignar un usuario</h3>
<div class="container-fluid">
<div class="row clearfix">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Nombre(s)">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Correo electronico">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="password" class="form-control" placeholder="Contraseña">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group drop-custum">
            <select class="form-control show-tick">
                <option value="">-- Asignar tipo de rol --</option>
                <option value="1">Dueño de la empresa</option>
                <option value="2">Responsable de obra</option>
                <option value="3">Asistente</option>
            </select>
        </div>    
    </div>    
<div class="col-lg-12 col-md-12 col-sm-12 text-center">
    <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
        <div class="dz-message">
        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
            <h3>Haga clic para cargar su foto de perfil.</h3>
            <!-- <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div> -->
        <div class="fallback">
            <input name="file" type="file" multiple />
        </div>
    </form>
    </div>
    <div class="col-sm-12 text-left">
        <button type="submit" class="btn btn-raised g-bg-blush2">Confirmar</button>
        <button type="submit" class="btn btn-raised btn-default">Cancelar</button>
    </div>  
</div>
@endsection