<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Galeria</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">

    <!-- Materialize.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>

    <style>
    body {
        background-image: url("https://img.freepik.com/foto-gratis/fondo-degradado-vino-tinto_53876-104119.jpg");
        background-size: 100% 100%;
        background-attachment: fixed;
    }

    .menu {
        list-style: none;
        padding: 0;
        background: #370813;
        width: 50%;
        max-width: 10000px;
        margin: auto;
        border-radius: 10px;
        position: relative;
        left: 50px;
        top: 50px;
    }

    .menu li a {
        text-decoration: none;
        color: white;
        padding: 20px;
        display: block;
        border-radius: 25px;
    }

    .menu li {
        display: inline-block;
        text-align: center;
    }

    .menu li a:hover {
        background: #d0d0d0;
    }

    .b {
        color: white;
        font-size: 30px;
        font-weight: bold;

    }

    h4 {
        text-align: center;
        color: white;
        font-weight: bold;

    }

    h1 {
        text-align: center;
        color: white;
        font-weight: bold;

    }


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .titulo {
        font-size: 40px;
        font-family: 'Dancing Script', cursive;
        margin-bottom: 40px;
        color: #fff;
    }

    .subtitulo {
        margin: 0;
        color: darkblue;
        display: inline;
        font-size: 50px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .sabor {
        color: #fff;
        margin: 7px 0;
        font-size: 50px;
        font-weight: 600;
        text-shadow: 2px 2px 1px rgba(0, 0, 0, 0.7);
        font-family: 'Dancing Script', cursive;
        margin-top: 0;
    }

    .linea-division {
        width: 80%;
        height: 2px;
        background-color: #36221c;
    }

    /* ------------------------- */
    /* Estilos de Materialize */
    /* ------------------------- */
    .carousel {
        min-height: 500px;
    }

    .carousel .carousel-item {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        user-select: none;
        width: 500px;
        height: 500px;
    }

    .carousel .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        border-radius: 15px;
    }

    .carousel .indicators .indicator-item {
        border-radius: 0;
        transform: rotate(45deg);
        margin: 0 15px;
        background: darkcyan;
    }


    /* footer */

    footer {
        background: #414141;
        padding: 60px 0 30px 0;
        margin: auto;
        overflow: hidden;
    }

    .contenedor-footer {
        display: flex;
        width: 90%;
        justify-content: space-evenly;
        margin: auto;
        padding-bottom: 50px;
        border-bottom: 1px solid #ccc;
    }

    .content-foo {
        text-align: center;
    }

    .content-foo h4 {
        color: #fff;
        border-bottom: 3px solid #af20d3;
        padding-bottom: 5px;
        margin-bottom: 10px;
    }

    .content-foo p {
        color: #ccc;
    }

    .titulo-final {
        text-align: center;
        font-size: 24px;
        margin: 20px 0 0 0;
        color: #9e9797;
    }

    @media screen and (max-width:900px) {
        header {
            background-position: center;
        }

        .contenedor-sobre-nosotros {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sobre-nosotros .contenido-textos {
            width: 90%;
        }

        .imagen-about-us {
            width: 90%;
        }

    }

    @media screen and (max-width:500px) {
        nav {
            text-align: center;
            padding: 30px 0 0 0;
        }

        nav>a {
            margin-right: 5px;
        }

        .textos-header h1 {
            font-size: 35px;
        }

        .textos-header h2 {
            font-size: 20px;
        }

        /* Footer */

        .contenedor-footer {
            flex-direction: column;
            border: none;
        }

        .content-foo {
            margin-bottom: 20px;
            text-align: center;
        }

        .content-foo h4 {
            border: none;
        }

        .content-foo p {
            color: #ccc;
            border-bottom: 1px solid #f2f2f2;
            padding-bottom: 20px;
        }

        .titulo-final {
            font-size: 20px;
        }
    }
    </style>

    <ul class="menu" style="text-align: center">
        <li class="b"> <br> </li>
        <li><a href="{{ url('/')}}">INICIO</a></li>
        <li><a href="{{ url('/productos')}}">PRODUCTOS</a></li>
        <li><a href="{{ url('/nosotros')}}">LUGARES TURISTICOS</a></li>
        <li><a class="active" href="{{ url('/foto_galeria')}}">GALERÍA</a></li>
        <li><a href="{{ url('/contact')}}">CONTACTENOS</a></li>
    </ul>
    <br><br><br>

    <h4>GOBIERNO PARROQUIAL ZAMBIZA</h4>


    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="center-align titulo">GALERÍA</h1>
            </div>

            <div class="carousel center-align">
                <div class="carousel-item">
                    <!-- <h2 class="subtitulo">PARQUE CENTRAL</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p> -->
                    <img src="https://pbs.twimg.com/media/DM1ZT9_W0AMB6M-.jpg"
                        width="400" alt="">
                </div>

                <div class="carousel-item">
                    <!-- <h2 class="subtitulo">Cultura</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p> -->
                    <img src="https://static.wixstatic.com/media/6cebd1_836cc7c84f374591b07df2caf2b9720b~mv2.jpg/v1/fill/w_797,h_797,al_c,q_85,enc_auto/6cebd1_836cc7c84f374591b07df2caf2b9720b~mv2.jpg"
                        width="400" alt="">
                </div>


                <div class="carousel-item">
                    <!-- <h2 class="subtitulo">Vacacionales</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p> -->
                    <img src="https://static.wixstatic.com/media/6cebd1_169b0ce313d74f3faefba3781e6fd388~mv2.jpeg/v1/crop/x_621,y_7,w_659,h_382/fill/w_605,h_351,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/PORTADA.jpeg"
                        alt="">
                </div>


                <div class="carousel-item">
                    <!-- <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p> -->
                    <img src="https://www.elcomercio.com/wp-content/uploads/2022/04/feria-zambiza-700x391.png" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <!-- <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p> -->
                    <img src="https://d1ralsognjng37.cloudfront.net/44437080-edb1-48c3-8028-61fda36108d4.jpeg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <!-- <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p> -->
                    <img src="https://zonales.quito.gob.ec/wp-content/uploads/WhatsApp-Image-2022-08-21-at-7.45.21-PM-450x250.jpeg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <!-- <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p> -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Mapa_Parroquia_Z%C3%A1mbiza_%28Quito%29.svg/1200px-Mapa_Parroquia_Z%C3%A1mbiza_%28Quito%29.svg.png" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <!-- <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p> -->
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTww1129eDqH54mki5DfEQhwFo9NJjmwT-8Yg&usqp=CAU" width="400"
                        alt="">
                </div>

                


            </div>
        </div>
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const elementosCarousel = document.querySelectorAll('.carousel');
        M.Carousel.init(elementosCarousel, {
            duration: 150,
            dist: -80,
            shift: 5,
            padding: 5,
            numVisible: 3,
            indicators: true,
            noWrap: false
        });
    });
    </script>



    <!-- Materialize.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Celular</h4>
                <p>0989037997</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>zambiza@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicacion</h4>
                <p>Jorge Salvador y Osvaldo Urtado</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; © 2022 Todos los derechos reservados por | GAD Zambiza.</h2>
    </footer>


</body>

</html>