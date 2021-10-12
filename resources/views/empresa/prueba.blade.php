@extends('layouts.panel')

@section('contenido')
    <div class="container-fluid">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                       <!-- <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div> -->
                                        <h3>Haga clic para cargarlos.</h3>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                                </div>
                            
</section>

@endsection