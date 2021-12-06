@extends('plantilla')
@section('contenido')
<div class="login-box">
    
<div class="login-logo">
<img src="img/Titulo.png" alt="titulo" style="width:400px">
</div>
<div class="login-box-body">
    <p class="login-box-msg">Ingresar al sistema</p>
    <form method="post" action="{{ route('login') }}">
    @csrf

        <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" require=""value="">
 <span class="glyphicon glyphicon-user form-control-feedback"></span> 
 </div>   
 <div class="form-group has-feedback">
 <input type="password" name="password" class="form-control" required="" value="">
 <span class="glyphicon glyphicon-lock form-control-feedback"></span> 
 </div>  
 @error('email')
 <br>
 <div class="alert alert-danger">Verifique su Email o Password</div>
 @enderror
 
 <div class="row">
 <div class="col-xs-12">
     <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
 
 </div>
</form>
</div>
</div>
@endsection
