@extends('layouts.panel')
@section('contenido')
    <div class="container-fluid">
        <div class="block-header">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <h2>Empresas</h2>
                    <small class="text-muted">Bienvenido a la aplicación ARROW</small>
                </div>
                <div>
                    <a href="/tenant/createcompany" class="btn btn-raised btn-success">Agregar empresa</a>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">
                           

                            <div class="m-t-20">
                                <h6 class="m-b-0"><strong>Nombre:</strong> Cravil</h6>
                                <h6 class="m-b-0"> <strong>RFC: </strong> SPLV12343415</h6> 
                            </div>

                            <p class="text-muted"> <strong>Ubicación:</strong> Calle alamos Avenida Benito</p>                           
                            <a href="profile.html"  class="btn btn-raised btn-danger">Ver empresa</a>
                           
                        </div>
                    </div>
                </div>
            </div>
           
            
            
        </div>
    </div>

    
@endsection