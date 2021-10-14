@extends('layouts.panel')
@section('contenido')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Modificar empresa</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						
					</div>
					<div class="body">                        
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Nombre de la empresa">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Ubicación de la empresa">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="RFC">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="IMSS">
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="CCEM">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick">
                                        <option value="">Seleccionar la afianzadora</option>
                                        <option value="10">Opción 1</option>
                                        <option value="20">Opción 2</option>
                                    </select>
                                </div>
                            </div>
                            <br/>
                            <br/>
                            <div class="col-sm-12">
                                <center>
                                <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Actualizar</button>
                                <a href="/tenant" class="btn btn-raised btn-default waves-effect">Cancelar</a>
                                </center>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>        
        
    </div>

    
@endsection