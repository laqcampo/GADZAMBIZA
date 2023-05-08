@extends('layouts.fronted.nosotros')
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
        <!--<img  class="imgtamaño" src="{{ asset('img/Lturisticos/fondo')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
    <nav>
        <ul>
            <li><a  href="{{ url('/')}}" >INICIO</a></li>
            <li><a  href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
            <li><a href="{{ url('/sobrenosotros')}}">EQUIPO DE TRABAJO</a></li>
            <li><a  href="{{ url('/productos')}}">PRODUCTOS</a></li>
            <li><a class="active" href="{{ url('/nosotros')}}">LUGARES TURISTICOS</a></li>
            <li><a href="{{ url('/foto_galeria')}}">GALERÍA</a></li>
            <li><a href="{{ url('/login')}}">INICIAR SESION</a></li>
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
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <!--<img  class="footer_img" src="{{asset('img/JLDIAZ.png')}}" alt="JLDM | Proyectos">-->
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
                        <a href="#">Twitter</a>
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
            <!-- <li class="features">
                <h2>Procedimiento de Pagos</h2>
                <ul class="box">
                    <li><a type="button" href="#">Ver mas</a></li>
                </ul>
                </li> -->
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="https://www.gadzambiza.gob.ec/" target="_blank">©GADZAMBIZA-2022</a></p>
        </div>
</footer>
@endsection
@section('title')
<div class="col-12">
		<div class="testimonial-title">
            <h3>LUGARES TURISTICOS</h3>
            <hr class="style1">
	    </div>
        <div class="container-fluid">
       <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="{{ asset('img/Lturisticos/iglesia.jfif')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">IGLESIA CENTRAL DE ZÁMBIZA</h5>
              <p class="card-text">  Este es un templo que posee siglos de historia, ya que supera los 500 años de construcción. El templo acoge imágenes religiosas como Patrono al Arcángel San Miguel, imagen que fue entregada por una contribución del Rey Felipe II de España. En este lugar se conserva una imagen del “Señor del Árbol”, más antigua de la que tiene la Parroquia de Pomasqui.</p>
            </div>
          </div>
        </div>
        <div class="col">
    <div class="card">
      <img src="{{ asset('img/Lturisticos/pcentral.jpg.webp')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PARQUE CENTRAL DE ZÁMBIZA</h5>
        <p class="card-text">
 ​El núcleo central de Zámbiza, que anteriormente funcionaba como las instalaciones de una cancha deportiva, gracias a gestiones y apoyo de la población zambiceña se construye un espacio verde que ha recopilado diferentes historias desde hace varios años, lugar turístico que posee ocho jardineras y en el centro una escultura que representa a la mujer zambiceña llamada La Doña, la misma que fue elaborada por manos de un morador de nuestra parroquia.
 Dentro del mismo se ha realizado varias intervenciones por parte de diferentes cuadrillas de limpieza del Municipio de Quito y Consejo Provincial, trabajos que han sido coordinadas por las autoridades del GAD Parroquial Zámbiza.

        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/Lturisticos/parque.webp')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PARQUE INFANTIL DE ZÁMBIZA</h5>
        <p class="card-text">
            Fue creado en el año 2017 por parte de Gad Parroquial de Zámbiza en conjunto con el Municipio de Quito tiene juegos infantiles y una cancha de usos múltiples.
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
