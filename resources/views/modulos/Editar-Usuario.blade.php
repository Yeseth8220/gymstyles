<!--vista para editar los registros de usuarios-->
@extends('plantilla')
@section('content')
<div class="content-wrapper" style="background-color:#282828; color:white">
<section class="content-header">
<h1>Editar el usuario:{{$Usuario->name}}</h1>
</section>
<section class="content">
    <div class="box">
        <!--volver a la lista de usuarios-->
    <div class="box-head" style="background-color:#282828; color:white"><br>
        <a href="{{ url('Usuario')}}">
        <button class="btn" style="background-color:rgb(255, 106, 6); color:white">Volver a usuarios</button>
        </a>
    </div>
    <!--formulario para modificar los campos a editar-->
<div class="box-body" style="background-color:#282828; color:white">
    <form method="post" action="{{url('actualizar-Usuario/'.$Usuario->id)}}">
    @csrf
    @method('put')

    <h2>Nombre y Apellido</h2>
    <input type="text"class="from-control input-lg" name="name" value="
    {{$Usuario->name}}" style="background-color:#9c9c9c; color:black">
 
    <h2>Documento</h2>
    <input type="text"class="from-control input-lg" name="documento" value="
    {{$Usuario->documento}}" style="background-color:#9c9c9c; color:black">
 
    <h2>Email</h2>
    <input type="text"class="from-control input-lg" name="email" value="
    {{$Usuario->email}}" style="background-color:#9c9c9c; color:black">
 
    <h2>Nueva Contraseña</h2>
    <input type="text"class="from-control input-lg" name="passwordN" value=""style="background-color:#9c9c9c; color:black">
    <input type="hidden"class="from-control input-lg" name="password" value=
    "{{$Usuario->password}}" style="background-color:#9c9c9c; color:black">
 
    <input type="hidden"class="from-control input-lg" name="telefono" value=
    "{{$Usuario->telefono}}" style="background-color:#9c9c9c; color:black">
    <br>
    <br>
<button class="btn" type="submit" style="background-color:rgb(255, 106, 6); color:white">Actualizar</button>
    </form>
</div>
 
</section>
</div>
 
@endsection
