@extends('layouts.panel')

@section('estilos')
<link href="{{asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('contenido')

    <div class="container-fluid">
        <div class="block-header">
            <h2>Actividades</h2>
            {{-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> --}}
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Lista de concepto de actividades</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead class="bg-danger">
                                <tr class="bg-info justify-content-center">
                                    <th>Codigo</th>
                                    <th>Concepto</th>
                                    <th>Unidad</th>
                                    <th>Cantidad</th>
                                    <th>P. Unitario</th>
                                    <th>Precio con letra</th>
                                    <th>Importe</th>
                                    <th>%</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <tr>
                                    <td>MTEP-001</td>
                                    <td> Trazo y nivelacion manual y/o con equipo topografico para lineas 
                                        de agua potable y drenaje. Incluye: suministros de materiales, 
                                        mano de obra, equipo y herramienta (P.U.O.T.)</td>
                                    <td>ML </td>
                                    <td>363.4900</td>
                                    <td>10.32</td>
                                    <td>(DIEX PESOS 32/100 M.N)</td>
                                    <td>3,751.22</td>
                                    <td>0.27%</td>
                                    <td class="d-flex Justify-content-center flex-wrap">
                                        <button type="button" class="btn btn-raised bg-grey waves-effect btn-sm">Editar </button>
                                        <button type="button" class="btn btn-raised bg-grey waves-effect btn-sm">Eliminar </button>
                                        <button type="button" class="btn btn-sm btn-raised bg-grey waves-effect"> Ver avance </button>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>MTEP-002</td>
                                    <td> Trazo y nivelacion manual y/o con equipo topografico para lineas 
                                        de agua potable y drenaje. Incluye: suministros de materiales, 
                                        mano de obra, equipo y herramienta (P.U.O.T.)</td>
                                    <td>ML </td>
                                    <td>363.4900</td>
                                    <td>10.32</td>
                                    <td>(DIEX PESOS 32/100 M.N)</td>
                                    <td>3,751.22</td>
                                    <td>0.27%</td>
                                    <td class="d-flex Justify-content-center flex-wrap">
                                        <button type="button" class="btn btn-raised bg-grey waves-effect btn-sm">Editar </button>
                                        <button type="button" class="btn btn-raised bg-grey waves-effect btn-sm">Eliminar </button>
                                        <button type="button" class="btn btn-sm btn-raised bg-grey waves-effect"> Ver avance </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>MTEP-003</td>
                                    <td> Trazo y nivelacion manual y/o con equipo topografico para lineas 
                                        de agua potable y drenaje. Incluye: suministros de materiales, 
                                        mano de obra, equipo y herramienta (P.U.O.T.)</td>
                                    <td>ML </td>
                                    <td>363.4900</td>
                                    <td>10.32</td>
                                    <td>(DIEX PESOS 32/100 M.N)</td>
                                    <td>3,751.22</td>
                                    <td>0.27%</td>
                                    <td class="d-flex Justify-content-center flex-wrap">
                                        <button type="button" class="btn btn-raised bg-grey waves-effect btn-sm">Editar </button>
                                        <button type="button" class="btn btn-raised bg-grey waves-effect btn-sm">Eliminar </button>
                                        <button type="button" class="btn btn-sm btn-raised bg-grey waves-effect"> Ver avance </button>
                                    </td>
                                   
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

       
     
    </div>

    
@endsection

@section('scripts')

<script src="{{asset('bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script> 

<script src="{{asset('js/pages/tables/jquery-datatable.js')}}"></script>
    
@endsection
