@extends('layouts.panel')

@section('contenido')
<div class="row clearfix">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="First Name">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Last Name">
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-3 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="datepicker form-control" placeholder="Date of Birth">
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="form-group drop-custum">
            <select class="form-control show-tick">
                <option value="">-- Genero --</option>
                <option value="10">Male</option>
                <option value="20">Female</option>
            </select>
        </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Department">
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Position">
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="telefono">
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Enter Your Email">
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="Website URL">
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
            <div class="dz-message">
                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                <h3>Drop files here or click to upload.</h3>
                <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
        <button type="submit" class="btn btn-raised btn-default">Cancel</button>
    </div>


    
@endsection