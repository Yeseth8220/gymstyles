<!--vista de clases-->
@extends('plantilla')
@section('content')
<div class="content-wrapper" style="background-color:#282828; color:white">
    <section class="content-header">
    <h1>Clases</h1>
    </section>
    <section class="content">
        <div class="box" style="background-color:#282828; color:white">
        </div>
        @if(auth()->user()->rol=="entrenador" || auth()->user()->rol=="administrador")
        <div>
            <button class="btn btn-lg" data-toggle="modal" data-target="#CrearClase" style="background-color:rgb(255, 106, 6); color :white"> Crear clase</button>
        </div>
        @endif
            <br>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">clase</th>
                    <th scope="col">descripcion</th>
                    <th scope="col">dias</th>
                    <th scope="col">hora</th>
                    <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clase as $clases)
                    <tr>
                    <th>{{$clases->id}}</th>
                    <td>{{$clases->clase}}</td>
                    <td>{{$clases->descripcion}}</td>
                    <td>{{$clases->dias}}</td>
                    <td>{{$clases->hora}}</td>
                    <td>
                        @if(auth()->user()->rol=="administrador")
                        <!--boton para eliminar clases-->
                        <form method="post" action="{{url('borrar-clase/'.$clases->id)}}">
                        @csrf
                        @method ('delete')
                            
                            <button type="submit" class="btn" style="background-color:darkred; color:white"><i class="fa fa-trash"></i></button>
                        </form>
                        @endif
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
        <!--modal-->
        <div id="CrearClase" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color:#282828">
                    <form method="post">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <h2>Nombre de la clase</h2>
                                <input type="text" class="form-control input-lg" name="clase" style="background-color:#9c9c9c">
                            </div>
                            <div class="form-group">
                                <h2>Descripcion</h2>
                                <input type="text" class="form-control input-lg" name="descripcion" style="background-color:#9c9c9c">
                            </div>
                            <div class="form-group">
                                <h2>Dia</h2>
                                <select class="form-control input-lg" name="dias" require="" style="background-color:#9c9c9c">
                                    <option value=""> Seleccionar...</option>
                                    <option value="lunes">Lunes</option>
                                    <option value="martes">Martes</option>
                                    <option value="miercoles">Miercoles</option>
                                    <option value="jueves">Jueves</option>
                                    <option value="viernes">Viernes</option>
                                    <option value="sabado">Sabado</option>
                                    <option value="domingo">Domingo</option>
                                </select>
                            <div class="form-group">
                                <h2>hora</h2>
                                <input type="time" class="form-control input-lg" name="hora" style="background-color:#9c9c9c">
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

    </section>
</div>
@endsection


