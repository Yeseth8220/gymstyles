<!--vista para editar los registros de Entrenadors-->
@extends('plantilla')
@section('content')
<div class="content-wrapper" style="background-color:#282828; color:white">
<section class="content-header">
<h1>Editar el Entrenador:{{$Entrenador->name}}</h1>
</section>
<section class="content">
    <div class="box">
        <!--volver a la lista de Entrenadors-->
    <div class="box-head" style="background-color:#282828; color:white"><br>
        <a href="{{ url('Entrenador')}}">
        <button class="btn" style="background-color:rgb(255, 106, 6); color:white">Volver a Entrenadors</button>
        </a>
    </div>
    <!--formulario para modificar los campos a editar-->
<div class="box-body" style="background-color:#282828; color:white">
    <form method="post" action="{{url('actualizar-Entrenador/'.$Entrenador->id)}}">
    @csrf
    @method('put')

    <h2>Nombre y Apellido</h2>
    <input type="text"class="from-control input-lg" name="name" value="
    {{$Entrenador->name}}" style="background-color:#9c9c9c; color:black">
 
    <h2>Documento</h2>
    <input type="text"class="from-control input-lg" name="documento" value="
    {{$Entrenador->documento}}" style="background-color:#9c9c9c; color:black">
 
    <h2>Email</h2>
    <input type="text"class="from-control input-lg" name="email" value="
    {{$Entrenador->email}}" style="background-color:#9c9c9c; color:black">
 
    <h2>Nueva Contraseña</h2>
    <input type="text"class="from-control input-lg" name="passwordN" value=""style="background-color:#9c9c9c; color:black">
    <input type="hidden"class="from-control input-lg" name="password" value=
    "{{$Entrenador->password}}" style="background-color:#9c9c9c; color:black">
 
    <input type="hidden"class="from-control input-lg" name="telefono" value=
    "{{$Entrenador->telefono}}" style="background-color:#9c9c9c; color:black">
    <br>
    <br>
<button class="btn" type="submit" style="background-color:rgb(255, 106, 6); color:white">Actualizar</button>
    </form>
</div>
 
</section>
</div>
 
@endsection
