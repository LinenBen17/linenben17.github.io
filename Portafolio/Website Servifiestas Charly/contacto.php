<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Complete Responsive Website Design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <a href="#" class="logo">Logo<span>.</span></a>
            <div class="menuToggle" onclick="togglemenu()"></div>
            <ul class="navigation">
                <li><a href="#banner" onclick="togglemenu()">Inicio</a></li>
                <li><a href="#about" onclick="togglemenu()">Acerca de</a></li>
                <li><a href="#menu" onclick="togglemenu()">Menus</a></li>
                <li><a href="#expert" onclick="togglemenu()">Fotografías</a></li>
                <!-- <li><a href="#testimonials" onclick="togglemenu()">Testimonials</a></li> -->
                <li><a href="#contact" onclick="togglemenu()">Contacto</a></li>
            </ul>
        </header>
        <section class="banner" id="banner">
            <div class="content">
                <h2>Servifiestas Y Banquetes Charly</h2>
                <p>De todo para sus eventos si no lo tengo lo consigo por usted... Eventos grandes,
                solicite descuento o regalos especiales. Desde 1992 sirviendoles con buenos precios, calidad y buen servicio.</p>
                <a href="#small-dialog5" class="btn popup-with-zoom-anim">Precios de mobiliarios</a>
            </div>
        </section>
        <section class="about" id="about">
            <div class="row">
                <div class="col50">
                    <h2 class="titleText"><span>V</span>ision</h2>
                    <p>Ser una empresa líder que brinde a nuestros clientes la satisfacción, confianza, tranquilidad y comodidad al
                    organizar sus eventos, y que nuestros clientes encuentren en nuestra empresa la variedad, surtido y disposición de productos en cada temporada.<br><br>
                </div>
                <div class="col50">
                    <div class="imgBx"><img src="images/img1.jpg"></div>
                </div>
            </div>
        </section>
        <section class="menu" id="menu">
            <div class="title">
                <h2 class="titleText">Nuestros <span>M</span>enus</h2>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3><a class="popup-with-zoom-anim" href="#small-dialog">Buffet 1</a></h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3><a class="popup-with-zoom-anim" href="#small-dialog2">Buffet 2</a></h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3><a class="popup-with-zoom-anim" href="#small-dialog3">Buffet 3</a></h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu4.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3><a class="popup-with-zoom-anim" href="#small-dialog4">Buffet 4</a></h3>
                    </div>
                </div>
            </div>
            <div class="popups">
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide small">
                    <ul>
                        <li>Pierna horneada con salsa morena</li>
                        <li>Pollo horneado con salsa de hongos</li>
                        <li>Carne prensada con salsa roja</li>
                        <li>Chuleta en barbacoa</li>
                        <li>Pepián de res o pollo</li>
                        <li>Jocon de res o pollo</li>
                    </ul>
                    <b>Q35.00 Por Persona</b>
                </div>
                <div id="small-dialog2" class="zoom-anim-dialog mfp-hide small">
                    <ul>
                        <li>Pechuga rellena o cordón blue de jamón y queso</li>
                        <li>Pechuga rellena o cordón blue de espinaca con queso</li>
                        <li>Pechuga empanizada</li>
                        <li>Lomito de cerdo mechado con salsa blanca</li>
                        <li>Lomo de cerdo con salsa al vino</li>
                        <li>Pavo horneado con salsa de hongos</li>
                    </ul>
                    <b>Q45.00 Por Persona</b>
                </div>
                <div id="small-dialog3" class="zoom-anim-dialog mfp-hide small">
                    <ul>
                        <li>Lomito de res mechado con salsa</li>
                        <li>blanca</li>
                        <li>Lomo de res con salsa al vino</li>
                    </ul>
                    <b>Q55.00 Por Persona</b>
                </div>
                <div id="small-dialog4" class="zoom-anim-dialog mfp-hide small">
                    <ul>
                        <li>Lazaña</li>
                        <li>Fideos alfredoos con salsa blanca, brócoli y pollo</li>
                        <li>Fideos a la boloñesa con carne y queso</li>
                    </ul>
                    <b>Q45.00 Por Persona</b>
                </div>
                <div id="small-dialog5" class="zoom-anim-dialog mfp-hide small">
                    <div class="scroll" style="height: 50vh; overflow: scroll;">
                        <table>
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                                            <th class="align-right">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SILLA PLASTICA SIN BRAZO PARA ADULTO UNIDAD</td>
                                                            <td class="align-right">Q2.00</td>
                                </tr>
                                <tr>
                                    <td>SILLA CHIAVARI DORADA COJIN BLANCO</td>
                                                            <td class="align-right">Q 15.00</td>
                                </tr>
                                <tr>
                                    <td>SILLA PLASTICA DE COLORES PARA NI&#209;OS UNIDAD</td>
                                                            <td class="align-right">Q1.25</td>
                                </tr>
                                <tr>
                                    <td>BANCOS PLASTICOS PARA ADULTOS DOCENA</td>
                                                            <td class="align-right">Q20.00</td>
                                </tr>
                                <tr>
                                    <td>MESA RECTANGULAR P/8 PERS TIPO TABLERO CON MANTEL Y CUBREMANTEL</td>
                                                            <td class="align-right">Q40.00</td>
                                </tr>
                                <tr>
                                    <td>MESA REDONDA P/10 PERS CON MANTEL Y CUBREMANTEL</td>
                                                            <td class="align-right">Q50.00</td>
                                </tr>
                                <tr>
                                    <td>MESA REDONDA P/8 PERS  CON MANTEL Y CUBREMANTEL</td>
                                                            <td class="align-right">Q40.00</td>
                                </tr>
                                <tr>
                                    <td>MESA REDONDA P/4 PERS  CON MANTEL</td>
                                                            <td class="align-right">Q20.00</td>
                                </tr>
                                <tr>
                                    <td>MESA COCKTELERA CON MANTEL Y CUBREMANTEL</td>
                                                            <td class="align-right">Q40.00</td>
                                </tr>
                                <tr>
                                    <td>MESA RECTANGULAR P/12 NI&#209;OS TIPO TABLERO CON MANTEL DE COLORES</td>
                                                            <td class="align-right">Q25.00</td>
                                </tr>
                                <tr>
                                    <td>MANTEL RECTANGULAR BLANCO O BIEGE</td>
                                                            <td class="align-right">Q15.00</td>
                                </tr>
                                <tr>
                                    <td>MANTEL REDONDO P/MESA DE 10 PERS BLANCO, ROJO, VERDE</td>
                                                            <td class="align-right">Q15.00</td>
                                </tr>
                                <tr>
                                    <td>FALDONES PARA TABLERO O MESA PLASTICA RECTANGULAR COLOR BLANCO Y NEGRO</td>
                                                            <td class="align-right">Q 25.00</td>
                                </tr>
                                <tr>
                                    <td>CUBREMANTEL VARIEDAD DE COLORES</td>
                                                            <td class="align-right">Q10.00</td>
                                </tr>
                                <tr>
                                    <td>FUNDAS PARA SILLAS COLOR BLANCO, NEGRO, BEIGE UNIDAD</td>
                                                            <td class="align-right">Q 6.00</td>
                                </tr>
                                <tr>
                                    <td>SERVILLETA DE TELA BLANCA</td>
                                                            <td class="align-right">Q 1.50</td>
                                </tr>
                                <tr>
                                    <td>PLATO BUFFETERO REDONDO UNIDAD</td>
                                                            <td class="align-right">Q1.50</td>
                                </tr>
                                <tr>
                                    <td>VASO TRASPARENTE DE 11 ONZ UNIDAD</td>
                                                            <td class="align-right">Q0.80</td>
                                </tr>
                                <tr>
                                    <td>JUEGO DE CUBIERTOS ( CUCHILLO Y TENEDOR ) UNIDAD</td>
                                                            <td class="align-right">Q1.50</td>
                                </tr>
                                <tr>
                                    <td>PICHELES DE VIDRIO TIPO JARRA UNIDAD</td>
                                                            <td class="align-right">Q10.00</td>
                                </tr>
                                <tr>
                                    <td>HIELERA PARA MESA CON TENAZA UNIDAD</td>
                                                            <td class="align-right">Q8.00</td>
                                </tr>
                                <tr>
                                    <td>CUCHARA SOPERA UNIDAD</td>
                                                            <td class="align-right">Q0.75</td>
                                </tr>
                                <tr>
                                    <td>PLATO PASTELERO UNIDAD</td>
                                                            <td class="align-right">Q 1.25</td>
                                </tr>
                                <tr>
                                    <td>CUCHARITA O TENEDOR DE POSTRE UNIDAD</td>
                                                            <td class="align-right">Q0.75</td>
                                </tr>
                                <tr>
                                    <td>AZAFATES DE MADERA UNIDAD</td>
                                                            <td class="align-right">Q8.00</td>
                                </tr>
                                <tr>
                                    <td>FUENTE DE CHOCOLATE</td>
                                                            <td class="align-right">Q 125.00</td>
                                </tr>
                                <tr>
                                    <td>CAFETERA P/100 TAZAS</td>
                                                            <td class="align-right">Q 100.00</td>
                                </tr>
                                <tr>
                                    <td>CAFETERA P/60 TAZAS</td>
                                                            <td class="align-right">Q 60.00</td>
                                </tr>
                                <tr>
                                    <td>CAFETERA P/ 40 TAZAS</td>
                                                            <td class="align-right">Q 40.00</td>
                                </tr>
                                <tr>
                                    <td>TAZAS PARA CAFE UNIDAD</td>
                                                            <td class="align-right">Q 1.00</td>
                                </tr>
                                <tr>
                                    <td>PORCELANA PARA TAZA UNIDAD</td>
                                                            <td class="align-right">Q 1.00</td>
                                </tr>
                                <tr>
                                    <td>DISPENSADOR PARA BEBIDA CAPACIDAD 5 GALONES</td>
                                                            <td class="align-right">Q 50.00</td>
                                </tr>
                                <tr>
                                    <td>DISPENSADOR PARA BEBIDA CAPACIDAD  3 GALONES</td>
                                                            <td class="align-right">Q 50.00</td>
                                </tr>
                                <tr>
                                    <td>COPAS PARA CHAMPAG&#209;E TIPO FLAUTA UNIDAD</td>
                                                            <td class="align-right">Q 2.00</td>
                                </tr>
                                <tr>
                                    <td>COPAS PARA CHAMPAG&#209;E TIPO TRADICIONAL  UNIDAD</td>
                                                            <td class="align-right">Q 1.50</td>
                                </tr>
                                <tr>
                                    <td>COPAS PARA CHAMPAG&#209;E TIPO TRADICIONAL DE PLASTICO DOCENA</td>
                                                            <td class="align-right">Q 7.00</td>
                                </tr>
                                <tr>
                                    <td>CHAIFING DISH CON QUEMADORES</td>
                                                            <td class="align-right">Q 95.00</td>
                                </tr>
                                <tr>
                                    <td>TOLDOS BLANCOS  6 MTS X 12 MTS</td>
                                                            <td class="align-right">Q 1050.00</td>
                                </tr>
                                <tr>
                                    <td>TOLDOS BLANCOS  6 MTS X 9 MTS</td>
                                                            <td class="align-right">Q 750.00</td>
                                </tr>
                                <tr>
                                    <td>TOLDOS BLANCOS  6 MTS X 6 MTS</td>
                                                            <td class="align-right">Q  625.00</td>
                                </tr>
                                <tr>
                                    <td>TOLDOS BLANCOS  6 MTS X 4 MTS</td>
                                                            <td class="align-right">Q 275.00</td>
                                </tr>
                                <tr>
                                    <td>TOLDOS AZULES  6 MTS X 4 MTS</td>
                                                            <td class="align-right">Q 250.00</td>
                                </tr>
                                <tr>
                                    <td>TOLDOS BLANCOS  5 MTS X 5 MTS</td>
                                                            <td class="align-right">Q 450.00</td>
                                </tr>
                                <tr>
                                    <td>TOLDOS BLANCOS  4 MTS X 4 MTS</td>
                                                            <td class="align-right">Q 225.00</td>
                                </tr>
                                <tr>
                                    <td>TOLDOS BLANCOS  3 MTS X 3 MTS</td>
                                                            <td class="align-right">Q 175.00</td>
                                </tr>
                                <tr>
                                    <td>TOLDOS CAFE  3 MTS X 3 MTS</td>
                                                            <td class="align-right">Q 150.00</td>
                                </tr>
                                <tr>
                                    <td>LONAS INMPERMEABLES GRISES 3 MTS  X  4 MTS</td>
                                                            <td class="align-right">Q 60.00</td>
                                </tr>
                                <tr>
                                    <td>PAREDES PARA TOLDOS 6 MTS  X 2 MTS BLANCAS UNIDAD</td>
                                                            <td class="align-right">Q 100.00</td>
                                </tr>
                                <tr>
                                    <td>SERVICIO DE MESERO DENTRO DE LA CAPITAL 5 HRS</td>
                                                            <td class="align-right">Q250.00</td>
                                </tr>
                                <tr>
                                    <td>SERVICIO DE MESERO FUERA DE LA CAPITAL 5 HRS</td>
                                                            <td class="align-right">Q300.00</td>
                                </tr>
                                <tr>
                                    <td>SERVICIO DE PARRILLERO</td>
                                                            <td class="align-right">Q 300.00</td>
                                </tr>
                                <tr>
                                    <td>HIELERA TERMICA PEQUE&#209;A</td>
                                                            <td class="align-right">Q 25.00</td>
                                </tr>
                                <tr>
                                    <td>HIELERA TERMICA GRANDE</td>
                                                            <td class="align-right">Q 75.00</td>
                                </tr>
                                <tr>
                                    <td>OFERTA HIELERA GRANDE CON 3 @ DE HIELO</td>
                                                            <td class="align-right">Q 125.00</td>
                                </tr>
                                <tr>
                                    <td>1/2 TONELES</td>
                                                            <td class="align-right">Q 25.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="title">
                <a href="menus.html" class="btn">Ver Todo</a>
            </div>
        </section>
        <section class="expert" id="expert">
            <div class="title">
                <h2 class="titleText">Fotos de <span>E</span>ventos</h2>
                <p>Eventos y montajes de diferentes estilos y colores.</p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="http://cdn.simplesite.com/i/b5/a8/286541532653529269/i286541539356694944.jpg" alt="">
                    </div>
                    <div class="text">
                        
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="http://cdn.simplesite.com/i/b5/a8/286541532653529269/i286541539299190353._szw1280h1280_.jpg" alt="">
                    </div>
                    <div class="text">
                        
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="http://cdn.simplesite.com/i/b5/a8/286541532653529269/i286541539356694946._szw1280h1280_.jpg" alt="">
                    </div>
                    <div class="text">
                        
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="http://cdn.simplesite.com/i/b5/a8/286541532653529269/i286541539356694951._szw1280h1280_.jpg" alt="">
                    </div>
                    <div class="text">
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="testimonials" id="testimonials">
            <div class="title white">
                <h2 class="titleText">The <span>S</span>aid About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, aliquam.</p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="images/testi1.jpg" alt="">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quo rerum
                        aspernatur quaerat voluptate. Magni numquam nisi maiores blanditiis culpa
                        suscipit praesentium, quo ipsam eaque. Eius aperiam dolores alias architecto.</p>
                        <h3>Someone Famous</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="images/testi2.jpg" alt="">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quo rerum
                        aspernatur quaerat voluptate. Magni numquam nisi maiores blanditiis culpa
                        suscipit praesentium, quo ipsam eaque. Eius aperiam dolores alias architecto.</p>
                        <h3>Someone Famous</h3>
                    </div>
                </div>                <div class="box">
                    <div class="imgBx">
                        <img src="images/testi3.jpg" alt="">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quo rerum
                        aspernatur quaerat voluptate. Magni numquam nisi maiores blanditiis culpa
                        suscipit praesentium, quo ipsam eaque. Eius aperiam dolores alias architecto.</p>
                        <h3>Someone Famous</h3>
                    </div>
                </div>
            </div>
        </section> -->
        <?php
                    $myemail = 'alquileres.charly@gmail.com';
                    $name = $_POST['nombre'];
                    $email = $_POST['email'];
                    $telefono = $_POST['telefono'];
                    $message = $_POST['mensaje'];

                    $to = $myemail;
                    $email_subject = "Nuevo mensaje: $email";
                    $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Teléfono: $telefono \n Mensaje: \n $message";
                    $headers = "De: $email";

                    $enviado = mail($to, $email_subject, $email_body, $headers);
                    if ($enviado) {
                        echo "<script> swal({
                            title: 'Confirmacion del Email',
                            text: 'El mensaje ha sido enviado con éxito.',
                        });</script>";
                    }else {
                        echo "<script> swal({
                            title: 'Confirmacion del Email',
                            text: 'Ha habido un problema al enviar, Intentalo de nuevo.',
                        });</script>";
                    }
                ?>
        <section class="contact" id="contact">
            <div class="title">
                <h2 class="titleText"><span>C</span>ontactanos</h2>
                <p>Con sus plumas te cubrirá, Y debajo de sus alas estarás seguro; Escudo y adarga es su verdad. SALMOS 91:4</p>
            </div>
            <form class="contactForm" action="contacto.php" method="POST">
                <h3>Envianos un Mensaje</h3>
                <div class="inputBox">
                    <input type="text" name="nombre" placeholder="Nombre Completo">
                </div>
                <div class="inputBox">
                    <input type="text" name="telefono" placeholder="Telefono">
                </div>
                <div class="inputBox">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <textarea placeholder="Mensaje" name="mensaje"></textarea>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </section>
        <div class="copyrightText">
            <p>Copyright 2021 <a href="https://linenben17.gq">LinenBen17</a>. All Right Reserved</p>
        </div>
        <script>
            window.addEventListener('scroll', function(){
                const header = document.querySelector('header');
                header.classList.toggle("sticky", window.scrollY > 0);
            });
            
            function togglemenu() {
                const menuToggle = document.querySelector(".menuToggle");
                const navigation = document.querySelector(".navigation");
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');
            }
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: true,
                    
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
            });
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    </body>
</html>