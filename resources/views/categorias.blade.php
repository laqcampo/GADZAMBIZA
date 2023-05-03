@extends('layouts.fronted.categorias')
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="none" class="fab fa-instagram"></a>
    </div>
    <div id="twiter">
        <a href="" target="none" class="fab fa-twitter-square"></a>
    </div>
    <div id="whatsaap">
        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="none" class="fab fa-whatsapp"></a>
    </div>
    <div id="linkeding">
        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="none" class="fab fa-linkedin"></a>
    </div>
</div>
@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
                2886 280 / 0998757288
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                gadzambiza@hotmail.com
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño"></h2>

    </a>
    <div class="menu-toggle" ></div>
    <nav>
            <ul>

                <li><a  href="{{ url('/')}}" >INICIO</a></li>
                <li><a  href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/sobrenosotros')}}">EQUIPO DE TRABAJO</a></li>
                <li><a class="active" href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a  href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="{{ url('/foto_galeria')}}">FOTO GALERÍA</a></li>
                <li><a href="{{ url('/login')}}">INICIAR SESION</a></li>

            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4>GOBIERNO <span>PARROQUIAL</span></h4>
					    <br><br>
                        <h1 class="tipeo1">VARIEDAD DE PRODUCTOS</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('products')
<div class="main">
    <br><h1 class="title_category">Les Presentamos Nuestra Variedad De Productos Propios De La Localidad</h1>
    <hr class="style4">
    <hr>
    <div class="container-fluid">
      <h2 class="title_category">Nuestros productos</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/productos/org.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Productos sin quimicos</h5>
        <p class="card-text">Una característica de nuestra parroquia es que se realiza el cultivo de productos sin químicos así manteniendo productos originales frescos y naturales.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/productos/org3.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Productos de campo</h5>
        <p class="card-text">
        Otro de nuestros atractivos es la crianza de gallinas de campo y también la recolección de huevos de campo frescos y naturales listos para la venta.
        </p>
      </div>
    </div>
  </div>




</div><br><br>
<h2 class="title_category">Nuestros Productores</h2><br>

<!-- seccion productores -->
<div class="container-fluid">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/productores/p1.1.jpeg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Productos 100% Naturales</h5>
        <h5>Elsa Guaman</h5>
        <p class="card-text">Es una de nuestras vecinas productoras con sus productos como: <i> hortalizas orgánicas, zanahorias, remolacha, rábanos, lechuga, nabo chino, zuquini, brócoli, perejil, huevos de campo etc.</i></p>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/productores/p2.jpeg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nuestra Feria</h5>
        <p class="card-text">
           Está a sus órdenes todos los días sábado de 6:30 a 10:00 cerca de la iglesia.
        </p>
      </div>
    </div>
  </div>
</div><br>
</div>
<!-- seccion productores -->

<!-- fin productos y ventas -->


</div>





    <hr class="style4">
    <ul class="cards">
        @foreach($categorias as $categoria)
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img  src="{{ asset('img/jldm_slider.jpg')}}" height="100"></div>
          <div class="card_content">
            <h1 class="card_title">{{$categoria->name}}</h1>
            <hr>
            <p class="card_text">{{$categoria->descripcion}}</p>
            <a class="btn card_btn" href="{{ route('searchCategory' , $categoria->slug)}}">
                Productos
            </a>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
@endsection

@section('footer')
<footer class="footer">
    <div class="l-footer">

        <h2 style="color: white" class="footer_img">Zámbiza</h2>
    <p>Es unida, con límites definidos, segura, saludable donde los ciudadanos acceden en igualdad de condiciones a los servicios básicos (energía, agua, saneamiento, salud, educación, tecnología) y a espacios verdes para la recreación.
    </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="_blank">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
            <li class="features">
                <h2>Procedimiento de Pagos</h2>
                <ul class="box">
                    <li><a type="button" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="https://www.gadzambiza.gob.ec/" target="_blank">©GADZAMBIZA-2022</a></p>
        </div>
</footer>
@endsection
