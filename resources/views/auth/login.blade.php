

@extends('layouts.sesion')

@section('title',':: ARROW Inicio de sesión ::')
    

@section('contenido')
<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span class="">Arrow</span>Inicio sesión</h1>
        <div class="col-sm-12">
            <form id="sign_in" method="POST">
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control bg-blakc" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="">
                    <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                    <label for="rememberme">Remember Me</label>
                </div>
                <div class="text-center">
                    <a href="" class="btn btn-raised waves-effect g-bg-blush2" >SIGN IN</a>
                    <a href="{{route('register') }}" class="btn btn-raised waves-effect" >SIGN UP</a>
                </div>
                <div class="text-center"> <a href="forgot-password.html">Forgot Password?</a></div>
            </form>
        </div>
    </div>    
</div>
    
@endsection