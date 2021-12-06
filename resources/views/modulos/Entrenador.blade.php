<!--vista de lista de entrenadores-->
@extends('plantilla')
@section('content')
<div class="content-wrapper" style="background-color:#282828; color:white">
<section class="content-header">
<h1>Entrenadores</h1>
</section>
<section class="content">
<div class="box">
    </div>
    <div class="box-header">
        
        <button class="btn btn-lg" data-toggle="modal" data-target="#CrearEntrenador" style="background-color:rgb(255, 106, 6); color:white"> Crear Entrenador</button>
    </div>
    <!--tabla de registros-->
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre y Apellido</th>
            <th>Clase</th>
            <th>Email</th>
            <th>Documento</th>
            <th>Telefono</th>
            <th>Editar/Borrar</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($Entrenador as $Entrenador)
    @if($Entrenador->rol == "entrenador")
    <tr>
            <td>{{$Entrenador->id}}</td>
            <td>{{$Entrenador->name}}</td>
            <td>{{$Entrenador->clase}}</td>
            <td>{{$Entrenador->email}}</td>
            <td>{{$Entrenador->documento}}</td>
            <td>{{$Entrenador->telefono}}</td>
            <td>
                <!--editar entrenador-->
                <a href="Editar-Entrenador/{{$Entrenador->id}}">
                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                </a>
                <!--boton para eliminar clases-->
                <button class="btn btn-danger EliminarEntrenador"Uid="{{$Entrenador->id}}"Entrenador="{{$Entrenador->name}}"  style="background-color:darkred; color:white">
                        <i class="fa fa-trash"></i></button>
                            

        </tr>
        @endif   
    @endforeach  
    </tbody>
    </table>
</div>
</section>
<!--modal para crear nuevo entrenador-->
<div id="CrearEntrenador" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#282828">
            <form method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <h2>Nombre y Apellido</h2>
                        <input type="text" class="form-control input-lg" name="name" style="background-color:#9c9c9c">
                    </div>
                    <div class="form-group">
                        <h2>Clase</h2>
                        <select class="form-control input-lg" name="id_clase" require="" style="background-color:#9c9c9c">
                            <option value=""> Seleccionar...</option>
                            @foreach($clase as $clase)
                            <option value="{{$clase->id}}">
                            {{$clase->clase}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h2>Documento</h2>
                        <input type="text" class="form-control input-lg" name="documento" style="background-color:#9c9c9c">
                    </div>
                    <div class="form-group">
                        <h2>Telefono</h2>
                        <input type="text" class="form-control input-lg" name="telefono" style="background-color:#9c9c9c">
                    </div>
                    <div class="form-group">
                        <h2>Email</h2>
                        <input type="email" class="form-control input-lg" name="email" value="" style="background-color:#9c9c9c">
                        @error('email')
                        <div class="alert alert-danger">El Email ya existe</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <h2>Contraseña</h2>
                        <input type="text" class="form-control input-lg" name="password" value="">
                    </div>
                    </div>
                </div>
 
                <div class="modal-footer">
                    <button type="submit"class="btn btn-primary">Crear</button>
                    <button type="button"class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
