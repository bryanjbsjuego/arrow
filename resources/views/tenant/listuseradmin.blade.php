@extends('layouts.panel')
@section('styles')
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('contenido')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Usuarios</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <div>
                <a href="/tenant/createuseradmin" class="btn btn-raised btn-success">Agregar usuario</a>
            </div>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>José Bryan Solis Jiménez</td>
                                    <td>bryan@gmail.com</td>
                                    <td>Dueño empresa</td>
                                    <td>
                                        <button type="button" class="btn  btn-raised btn-primary btn-sm" ><i class="material-icons">vpn_key</i></button>
                                        <button type="button" class="btn  btn-raised btn-warning btn-sm"><i class="material-icons">create</i></button>
                                        <button type="button" class="btn  btn-raised btn-danger btn-sm"><i class="material-icons">delete_sweep</i></button>
                                    </td>
                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
    

@endsection

@section('scripts')
    <script src="{{ asset('bundles/datatablescripts.bundle.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

    <script src="{{ asset('bundles/mainscripts.bundle.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('js/pages/tables/jquery-datatable.js')}}"></script>
@endsection
