@extends('layouts.panel')

@section('contenido')
<div class="row clearfix"> 
    <!-- Colorful Panel Items With Icon -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header text-center">
                <h2> CONCEPTOS DE LA OBRA</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-raised g-bg-blush2">Lista de conceptos Obra</button>
                        
                    </div>
                    <div class="col-xs-4 ol-sm-8 col-md-8 col-lg-8">
                        
                        <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-col-grey">
                                <div class="panel-heading" role="tab" id="headingOne_17">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseOne_17" aria-expanded="true" aria-controls="collapseOne_17"> <i class="material-icons">assignment</i>A02 Construcción de Pavimentación  </a> </h4>
                                </div>
                                <div id="collapseOne_17" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_17">
                                    <div class="panel-body d-flex justify-content-center flex-wrap"> 
                                        <button type="button" class="btn  btn-raised btn-info waves-effect">Agregar Conceptos</button>    
                                        <button type="button" class="btn  btn-raised btn-info waves-effect">Ver lista de conceptos</button>    
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>

</div>

@endsection