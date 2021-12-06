<!--encabezado-->

<header class="main-header" style="background-color:black">
<a href="{{url('inicio')}}"class="logo">
    <span class="logo-mini" style="color:white"><b>G S</b></span>
    <span class="logo-lg" style="color:white"><b>GYM STYLE´s</b></span>
</a>
<nav class="navbar navbar-static-top" >
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="color:white">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar" ></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<div class="navbar-custom-menu">
<ul class ="nav navbar-nav">
<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white">
 <!--ver mis datos y cerrar sesion-->
{{ auth()->user()->name }}    
 
    <span class="hidden-xs"></span>
</a>
<ul class="dropdown-menu" style="color:grey">
    <li class="user-footer">
        <div class="pull-left">
            <a href="" class="btn btn-primary btn-flat">mis datos</a>
        </div>
        <div class="pull-right">
            <a href="{{route( 'logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-flat">salir</a>
        </div>
        <form method="post" id="logout-form" action="{{route('logout')}}">
            @csrf
        </form>
    </li>
</ul>
</li>
 
</ul>
 
</div>
</nav>
</header>