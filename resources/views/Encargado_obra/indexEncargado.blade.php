@extends('layouts.panel')

@section('estilos')
<link href="{{asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('contenido')

    <div class="container-fluid">
        <div class="block-header">
            <h2>PROYECTOS</h2>
            {{-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> --}}
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Todas las Obras asignadas</h2>
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
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Contrato</th>
                                    <th>Obra</th>
                                    <th>Dependencia</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td> MTE/DOP/IR/FEFOM/006/2020</td>
                                    <td>INTRODUCCIÓN DE RED DE AGUA POTABLE Y CONSTRUCCIÓN DE PAVIMENTACIÓN EN CALLE GARDENIAS ORIENTE </td>
                                    <td>H. AYUNTAMIENTO CONSTITUCIONAL  DE TEPOTZOTLÁN</td>
                                    <td class="d-flex">
                                        <button type="button" class="btn btn-raised bg-grey waves-effect btn-sm"> <i class="material-icons">visibility</i> </button>
                                        <button type="button" class="btn btn-sm btn-raised bg-grey waves-effect"> <i class="material-icons">add</i> </button></td>
                                   
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                   
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                             
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>M.COM</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                  
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                 
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>B.COM</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                              
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>BBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                              
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                  
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>MCA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                
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
