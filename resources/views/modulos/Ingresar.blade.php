<!--formulario de inicio de sesion-->
@extends('plantilla')
@section('contenido')
<div class="login-box">
    
<div class="login-logo">
<img src="img/GYM3.png" alt="titulo" style="width:400px">
</div>
<!--ingresar datos del usuario-->
<div class="login-box-body" style="background-color: #282828; color:white">
    <p class="login-box-msg">Ingresar a la Plataforma</p>
    <form method="post" action="{{ route('login') }}">
    @csrf

        <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" require=""value="" style="background-color: #9c9c9c">
 <span class="glyphicon glyphicon-user form-control-feedback"></span> 
 </div>   
 <div class="form-group has-feedback">
 <input type="password" name="password" class="form-control" required="" value="" style="background-color: #9c9c9c">
 <span class="glyphicon glyphicon-lock form-control-feedback"></span> 
 </div>  
 @error('email')
 <br>
 <div class="alert alert-danger">Verifique su Email o Password</div>
 @enderror
 
 <div class="row">
 <div class="col-xs-12">
     <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color:rgb(255, 106, 6);">Ingresar</button>
 
 </div>
</form>
</div>
</div>
@endsection
