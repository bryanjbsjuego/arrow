
@extends('layouts.sesion')

@section('title',':: Registrate ::')
@section('contenido')

    <div class="container">
        <div class="card-top"></div>
        <div class="card">
            <h1 class="title"><span>Arrow</span>Registrate </h1>
            <div class="col-sm-12">
                <form id="sign_up" method="POST">            
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="namesurname" placeholder="Nombre" required="" autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-email"></i>
                    </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required="">
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirma password" required="">
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                    <label for="terms">Aceptop los terminos y condiciones<a href="javascript:void(0);">terms of usage</a>.</label>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-raised g-bg-blush2 waves-effect" >Registrate</a>
                </div>
                <div class="m-t-10 m-b--5 align-center">
                    <a href="{{route('login') }}">Ya tienes una cuenta?</a>
                </div>
            </form>
            </div>
        </div>  
    </div>
@endsection
