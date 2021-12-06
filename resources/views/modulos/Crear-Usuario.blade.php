<!--vista para registrar nuevos usuarios-->
@extends('plantilla')
@section('content')
<div class="content-wrapper" style="background-color:#282828; color:white">
<section class="content-header">
<h1>Crear Usuario</h1>
</section>
<section class="content">
    <div class="box" style="background-color:#282828; color:white">
    <div class="box-body">
        <!--formulario para ingresar los datos del nuevo usuario-->
        <form method="post" style="background-color:#282828; color:white">
            @csrf
            <div class="form-group">
                <h2>Nombre y Apellido</h2>
                <input type="text"name="name" class="form-control input-lg" style="background-color:#9c9c9c; color:black">
 
            </div>
            <div class="form-group">
                <h2>Documento</h2>
                <input type="text"name="documento" class="form-control input-lg" style="background-color:#9c9c9c; color:black">
 
            </div>
            <div class="form-group">
                <h2>Telefono</h2>
                <input type="text"name="telefono" class="form-control input-lg" style="background-color:#9c9c9c; color:black">
 
            </div>
            <div class="form-group">
                <h2>Email</h2>
                <input type="email" class="form-control input-lg" name="email" value="{{old('email')}}" style="background-color:#9c9c9c; color:black">
                        @error('email')
                        <div class="alert alert-danger">El Email ya existe</div>
                        @enderror
            </div>
            <div class="form-group">
                <h2>Password</h2>
                <input type="text"name="password" class="form-control input-lg" style="background-color:#9c9c9c; color:black">
 
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg" style="background-color:rgb(255, 106, 6); color:white">Agregar</button>
        </form>
    </div>
</section>
</div>
 
@endsection
