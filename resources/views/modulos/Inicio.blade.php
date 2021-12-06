<!--boton para direccionar a la vista de inicio-->
@extends('plantilla')
@section('content')
<head>
<!-- CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<div class="content-wrapper">
<section class="content-header">
    <!--titulo inicio-->
<h1>inicio</h1>
</section>
<section class="content">
    <div class="box">
    </div>    
    <center>
        <div class="col-12">
            <!--imagen titulo-->
        <img src="img/GYM3.png" alt="titulo" style="width:300px">
        </div>
        <!--video motivacional-->
        <div class="col-12">    
            <iframe width="600" height="400" src="https://www.youtube.com/embed/3QRYYC4QEh4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="video">
            </iframe>
        </div>
    </center>
@endsection
