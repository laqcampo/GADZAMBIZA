@extends('layouts.fronted.contact')
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
        <!--<img  class="imgtamaño" src="{{ asset('img/jldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a  href="{{ url('/')}}" >INICIO</a></li>
                <li><a class="active" href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/sobrenosotros')}}">EQUIPO DE TRABAJO</a></li>
                <li><a  href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a  href="{{ url('/nosotros')}}">Lugares turísticos</a></li>
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
                            <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                            <h1 class="tipeo2"><span class="type"></span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@section('Content_messege')
<div class="conatiner">
    <div class="form">
        <div class="contact-info">
                <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3>
                <p class="contact_text">Un punto estratégico para una mejor atención a
                    nuestros clientes para que puedan realizar su compra o
                    recoger sus productos.
                </p>

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                    <p>Guayaquil OE3-101 y Bolívar, 2do Piso</p>
                </div>
                <div class="contact_information">
                <i class="fas fa-2x fa-phone-volume"></i>
                <p>2886 280 / 0998757288</p>
                </div>
                <div class="contact_information">
                    <i class="far fa-2x fa-envelope"></i>
                    <p>gadzambiza@hotmail.com</p>
                </div>
            </div>
            <div class="social_media">
                <p>REDES SOCIALES</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100064519253506"  target="none">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100064519253506"  target="none">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" target="none">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100064519253506" target="none">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>




        <div class="contact-form">
            <form action="{{ url('/contact')}}" method="post" autocomplete="off">
                @csrf
                <h3 class="contact_tittle">COMUNÍCATE CON NOSOTROS</h3>
                <div class="input-container ">
                    <input type="text" name="nombre" class="contact_input" placeholder="NOMBRE">
                </div>
                <div class="input-container">
                <h4 class="contact_tittle"></h4>
                    <input type="text" name="email" class="contact_input" placeholder="Ejemplo: juan@zambiza.com">
                </div>
                <div class="input-container">
                    <input type="tel" name="celular" class="contact_input" placeholder="CELULAR">
                </div>
                <div class="input-container">
                <h4 class="contact_tittle">Mensaje</h4>
                    <textarea name="mensaje" class="contact_input" id="" placeholder=></textarea>
                </div>
                <input type="submit" value="ENVIAR" class="contact_btn">
            </form>
             @if (session('info'))
             <script>
                  alert("{{session('info')}}")
             </script>
             @endif
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
                        <a href="https://www.facebook.com/profile.php?id=100064519253506"target="_blank">Instagram</a>
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
                    <li><a type="button" class="btn btn-outline-info" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="https://www.gadzambiza.gob.ec/" target="_blank">©GADZAMBIZA-2022</a></p>
        </div>
</footer>
@endsection
