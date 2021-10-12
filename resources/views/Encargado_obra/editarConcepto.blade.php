@extends('layouts.panel')

@section('contenido')
<div class="block-header">
    <h2>Editar Concepto</h2>
    
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header text-center">
                <h2>Descripcion del concepto </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Codigo">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Descripcion del Concepto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Unidad">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" placeholder="Cantidad">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" placeholder="Precio Unitario">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Precio con letra">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Importe">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="porcentaje">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">                            
                 
                    <div class="col-sm-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-raised g-bg-blush2">Guardar</button>
                        <button type="submit" class="btn btn-raised btn-default">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection 