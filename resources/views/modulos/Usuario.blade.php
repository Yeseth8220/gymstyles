<!--lista de usuarios registrados-->
@extends('plantilla')
@section('content')
<div class="content-wrapper" style="background-color:#282828; color:white">
<section class="content-header">
    <!--titulo-->
<h1>Usuarios</h1>
</section>
<section class="content">
    <div class="box">
    </div> 
    <!--autenticar que solo el administrador pueda registrar un nuevo usuario-->
    @if(auth()->user()->rol=="administrador")
    <div class="box-head"><br>
        <a href="Crear-Usuario">
        <button class="btn btn-lg" style="background-color:rgb(255, 106, 6); color:white"> Agregar Usuario</button>
        </a>
    </div>
    @endif
    <div class="box-body">
        <!--tabla de usuarios registrados-->
        <table class="table">
        <!--campos de la tabla-->
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre y Apellido</th>
                <th>Documento</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Editar/Borrar</th>
            </tr>
        </thead>
        <!--datos de los usuarios registrados-->
        <tbody>
        @foreach($Usuario as $Usuario)
        <tr>
                <td>{{$Usuario->id}}</td>
                <td>{{$Usuario->name}}</td>
                <td>{{$Usuario->documento}}</td>
                <td>{{$Usuario->email}}</td>
                <td>{{$Usuario->telefono}}</td>
                <td>
                    <!--autenticar que solo el administrador pueda editar la informacion del usuario-->
                @if(auth()->user()->rol=="administrador")
                    <!--boton para direccionar a la vista para editar registros de usuarios-->
                <a href="Editar-Usuario/{{$Usuario->id}}">
                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                     </a>
                    <!--boton para eliminar usuarios-->
                    <button class="btn btn-danger EliminarUsuarioDoctor" Did="{{$Usuario->id}}"Usuario="{{$Usuario->name}}"> <i class="fa fa-trash"></i> </button>
                @endif      
                </td>
            </tr>
        @endforeach

        </tbody>
        </table>
    </div>
 
</section>
</div>
 
@endsection
