<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacto | LinenBen17</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/Contacto.css" rel="stylesheet">
        <link rel="icon" href="https://i.ibb.co/S0CVWJw/logo2.png" type="image/png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
        <script>
            window.onload = function(){
                $('#preload').fadeOut();
                $('body').removeClass('hidden');
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.menu-toggle').click(function(){
                    $('.menu-toggle').toggleClass('active')
                    $('nav').toggleClass('active')
                })
            });
        </script>
        <!-- script para que funcione al 100% el botón ir arriba -->
        <script>
            //invocamos al objeto (window) y a su método (scroll), solo se ejecutara si el usuario hace scroll en la página
            $(window).scroll(function(){
            if($(this).scrollTop() > 300){
                $("#js_up").slideDown(300);
            }else{ // si no
                $("#js_up").slideUp(300);
            }
            });
            //creamos una función accediendo a la etiqueta i en su evento click
            $("#js_up i").on('click', function (e) {
                e.preventDefault();
                $("body,html").animate({
                scrollTop: 0
            },700);
                return false;
            });
        </script>
    </head>
    <body class="hidden">
        <a href="#" id="js_up" class="boton-subir">
            <!-- link del icono http://fontawesome.io/icon/rocket/ -->
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </a>
    <!-- Preload -->
    <div id="preload">
        <div class="loader">
        <div class="ball"></div>
    </div>
    </div>
    <!-- header -->
    <header>
        <div class="menu-toggle"></div>
        <img src="https://i.ibb.co/0qjp1RL/Logo.png" id="logo" alt="Logo" border="0">
        <!-- Barra de Navegacion -->
            <nav class="" id="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Tarifas.html">Tarifas</a></li>
                    <li><a href="Contacto.html" class="active">Contacto</a></li>
                    <li><a href="Portafolio.html">Portafolio</a></li>
                    <li><a href="Blog.html">Blog</a></li>
                </ul>
            </nav>
        <!-- Barra de Progreso -->
        <div class="container-progressbar">
            <div class="progressbar"></div>
        </div>
        <div class="clearfix"></div>
        <hgroup>
            <h1>LinenBen17</h1>
            <h2>Desarrollo Web</h2>
        </hgroup>
        <script src="js/mijs.js"></script>
    </header>
    <!-- Section -->
    <section>
    <?php
            $myemail = 'consultas@linenben17.gq';
            $name = $_POST['nombre'];
            $email = $_POST['email'];
            $message = $_POST['mensaje'];

            $to = $myemail;
            $email_subject = "Nuevo mensaje: $email";
            $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
            $headers = "From: $email";

            mail($to, $email_subject, $email_body, $headers);
            echo "<script> swal({
                title: 'Confirmacion del Email',
                text: 'El mensaje A sido Enviado',
              });</script>";
    ?>
        <div class="formulario">
            <form method="POST" action="enviar.php">
                <h1>Contacto</h1>
                <input id="NOMBRE" required type="text" name="nombre" placeholder="Nombre:">
                <input id="EMAIL" required="@" type="email" name="email" placeholder="Email:example@gmail.com"><br>
                <input id="asunto" required type="text" name="mensaje" placeholder="Mensaje:"><br>
                <input id="boton" type="submit" value="ENVIAR">
            </form>
        </div>
        <!-- Contenedores -->
        <div class="contenedores">
            <!-- Contenedor 1 -->
            <div class="contenedor1">
                <h1><i class="fa fa-address-book" aria-hidden="true"></i></h1>
                <p>¿Deseas una página web? Ponte en contacto con nosotros a través de este formulario. <br> 
                    Si tienes dudas o consultas</p>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <div class="container">
            <!-- Redes Sociales -->
            <div class="sec aboutus">
                <h2>Redes Sociales</h2>
                <ul class="sci">
                        <li><a style="color: #fff;" target="_blank" href="https://facebook.com/LinenBen17A"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a style="color: #fff;" target="_blank" href="https://www.instagram.com/linen_ben/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a style="color: #fff;" target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                </ul>
            </div>
            <!-- Obtener Links -->
            <div class="sec quicklinks">
                <h2>Links</h2>
                <ul>
                    <li><a href="index.html">Principal</a></li>
                    <li><a href="Tarifas.html">Precios</a></li>
                    <li><a href="Contacto">Contacto</a></li>
                    <li><a href="Portafolio.html">Proyectos</a></li>
                    <li><a href="Blog.html">Blog</a></li>
                </ul>
            </div>
            <div class="sec contact">
                <ul class="info">
                    <h2>Contactanos</h2>
                    <li>
                        <span><i id="contac" class="fa fa-phone" aria-hidden="true"></i></span>
                        <p><a href="tel:+50259409178">+502 5940-9178</a><br>
                            <a href="tel:+50242255164">+502 4225-5164</a></p>
                    </li>
                    <li>
                        <span><i id="contac" class="fa fa-envelope" aria-hidden="true"></i></span>
                        <p><a href="mailto:aesquitecastillo@gmail.com">consultas@linenben17.gq</a></p>
                    </li>
                </ul>
            </div>
            <div class="copy">
                <p>CopyRight © 2020 <span>LinenBen17</span></p>
            </div>
        </div>
    </footer>
    </body>
</html>