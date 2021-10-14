@extends('layouts.panel')
@section('contenido')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Asignar permisos</h2>
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
                                <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th>Módulo</th>
                                            <th>Consultar</th>
                                            <th>Crear</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Empresas</td>
                                            <td>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" checked="">
                                                        <span class="lever"></span>Si</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" checked="">
                                                        <span class="lever"></span>Si</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" checked="">
                                                        <span class="lever"></span>Si</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" checked="">
                                                        <span class="lever"></span>Si</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Empleados</td>
                                            <td>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" checked="">
                                                        <span class="lever"></span>Si</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" checked="">
                                                        <span class="lever"></span>Si</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" checked="">
                                                        <span class="lever"></span>Si</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" checked="">
                                                        <span class="lever"></span>Si</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            
                            
                            <br/>
                            <br/>
                            <div class="col-sm-12">
                                <center>
                                <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Asignar</button>
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