<!--vistas home-->
@extends('plantilla')
@section ('contenido')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<div class="container-fluid">
    <!--encabezado inicio-->
    <div class="row">
        <header class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <!--logo-->
                <img src="../img/logo.png" alt="" width="80" height="80">
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!--boton para iniciar sesion-->
                    <a class="nav-link active" href="Ingresar">iniciar sesion</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        </header>
    </div>
    <article class="col-12">
        <center>
            <!--imagen titulo-->
            <div class="col-12">
            <img src="img/GYM3.png" alt="titulo" style="width:300px">
            </div>
            <!--carrusel de imagenes-->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://sextoanillo.com/wp-content/uploads/2016/12/personas-ejercitando-gimnasio-caminadoras.jpg" class="d-block w-75" alt="..." height="500px">
                  </div>
                  <div class="carousel-item" data-bs-interval="10000">
                    <img src="https://imagenes.20minutos.es/files/image_656_370/uploads/imagenes/2018/09/23/673286.jpg" class="d-block w-75" alt="..." height="500px" >
                  </div>
                  <div class="carousel-item" data-bs-interval="10000">
                    <img src="https://us.123rf.com/450wm/dolgachov/dolgachov1705/dolgachov170502911/78749259-grupo-de-personas-colgando-en-la-barra-horizontal-en-el-gimnasio.jpg?ver=6" class="d-block w-75" alt="..."  height="500px">
                  </div>
                </div>
            </div>
        </center>
    </article><br>
    <!--Cards-->
    <div class="row row-cols-1 row-cols-md-3 g-4" id="cards">
        <div class="col">
          <div class="card h-100">
            <img src="https://i0.wp.com/www.aroypedal.com/wp-content/uploads/2018/02/Comida-sana-y-ejercicio.jpg?fit=1160%2C700&ssl=1" class="card-img-top" height="250px" >
            <div class="card-body">
              <h5 class="card-title">Alimentate Bien</h5>
              <p class="card-text">Existe evidencia sólida que demuestra que comer una dieta saludable puede reducir su riesgo de obesidad y enfermedades tales como diabetes, cardiopatía, accidentes cerebrovasculares, osteoporosis y algunos tipos de cáncer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://imagenes.expreso.ec/files/image_700_402/uploads/2020/03/30/5e82ae32c6020.jpeg" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
              <h5 class="card-title">Haz Ejercicio en Casa</h5>
              <p class="card-text">Aporta energía para todo el día. <br> 
              Tonifica y moldea los músculos. Aumenta la flexibilidad. <br> 
              Incrementa la concentración, reduce el estrés y ayuda a tener mayor conciencia corporal.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://www.mgc.es/wp-content/uploads/2018/03/dormir-bien.jpg" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
              <h5 class="card-title">Duerme Bien</h5>
              <p class="card-text">El sueño le da al cuerpo un descanso y le permite prepararse para el día siguiente.<br> 
              Es como darle al cuerpo unas pequeñas vacaciones. <br> 
              El sueño también le da al cerebro la posibilidad de resolver las cosas.</p>
            </div>
          </div>
        </div>
    </div>
<!--footer-->
    <div class="row">
        <footer class="col-12">
            <div class="row">
                <!--copyright-->
            <div class="col-12 col-md-9" style="color:white">
                <span>Copyright &copy; Gym Style's 2021. Todos los derechos reservados.</span><br>
                <span>Yeseth Santiago Reyes, </span>
                <span>Mabel Tatiana Diaz</span>
            </div>
                <!--redes de contacto-->
            <div class="col-12 col-md-3">
                <button class="btn btn-outline-link  text-light">
                <i class="fa fa-facebook fa-2x"></i>
                </button>
                <button class="btn btn-outline-link text-light">
                    <i class="fa fa-instagram fa-2x"></i>
                </button>
                <button class="btn btn-outline-link  text-light">
                    <i class="fa fa-twitter fa-2x"></i>
                </button>
                <button class="btn btn-outline-link text-light">
                    <i class="fa fa-whatsapp fa-2x"></i>
                </button>
            </div>
            </div>
        </footer>
    </div>
</div>
@endsection

