<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="Guidline/BrandMark/Isotipo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/1f7457abdb.js"></script>
    <script>
        $(document).ready(function() {
            $(".shopping-cart").fadeOut(0);
            $("#cart").click(function() {
                $(".shopping-cart").fadeToggle(200);
            });
            $("#cart2").click(function() {
                $(".shopping-cart").fadeToggle(200);
            });
        });
    </script>
    <title>Juan Shop</title>
</head>

<body>
    <a name="start"></a>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- PARTE DEL NAV -->
    <section class="nav_global display-flex">
        <nav>
            <a class="img_nav" href="index.php">
                <img src="Guidline/BrandMark/Logotipo-_1_.svg" alt="logo-juan">
            </a>
            <ul class="paneles_nav">
                <li class="button-nav upper-case">
                    <a class="info_panel" href="Productos.php">Productos</a>
                </li>
                <li class="button-nav upper-case">
                    <a class="info_panel" href="#news">Noticias</a>
                </li>
                <li class="button-nav upper-case">
                    <a class="info_panel" href="#contact">Contacto</a>
                </li>
                <li><a href="#" class="info_panel" id="cart2"> CART </a></li>
            </ul>
            <a class="login button-nav upper-case" href="login.php">
                <p>log in</p>
                <i class="fas fa-user"></i>
            </a>
        </nav>

        <!--DESPLEGABLE CISTELLA-->
        <div class="container">
            <div class="shopping-cart">
                <div class="shopping-cart-total">
                    <p>Total:</p>
                    <p class="total">
                        <?php
                        include "getTotal_cistella.php";
                        ?>
                    </p>
                </div>
                <div class="shopping-cart-header">
                </div>

                <?php
                session_start();
                require_once "model.php";

                //CISTELLA
                $laMevaCistella = new Cistella();
                $currentPage = $_SERVER['SCRIPT_NAME'];
                if (isset($_SESSION['cistella_serialitzada'])) {
                    $cistella_sesion = $_SESSION['cistella_serialitzada'];
                    $productesSessio = unserialize($cistella_sesion);
                    if (!empty($productesSessio)) {
                        foreach ($productesSessio as $producteCistella) {
                            echo '
                            <section class="shopping-cart-items">
                                <article class="clearfix">
                                    <article class="imgTxtCart">
                                        <img width="20%" src="./CRUD' . $producteCistella->fotos . '" alt="item1" />
                                        <p class="item-name">' . $producteCistella->titol . '</p>
                                    </article>
                                    <article class="infoCompraCart">
                                        <article class="detallesCart">
                                                <p class="txtCaracteristicasCompraCart">Precio:</p>
                                                <p class="item-price">' . $producteCistella->preu . '€</p>
                                        </article>
                                        <article class="detallesCart2">
                                            <p class="txtCaracteristicasCompraCart">Cantidad:</p>
                                            <p class="item-quantity">' . $producteCistella->quantitat . '</p>
                                        </article>
                                        <form action="eliminar_cistella.php" method="POST">
                                            <input type="hidden" name="currentFile" value="' . $currentPage . '">
                                            <input type="hidden" name="eliminaProducte" value="' . $producteCistella->id . '"/>
                                            <button type="submit" class="buttonEliminar">Eliminar</button>
                                        </form>
                                    </article>
                                </article>
                            </section>';
                        }
                    } else {
                        echo '
                        <section class="shopping-cart-items">
                            <article class="clearfix">
                                <p class="item-name" style="padding-left: 3%;">La cesta está vacía</p>
                            </article>
                        </section>';
                    }
                }

                $currentPage = $_SERVER['SCRIPT_NAME'];
                //FALTA ACABAR BOTO COMPRAR
                echo '
                <article class="comprarYVaciarCart">
                    <form class="comprar" action="checkout.php" method="POST">
                            <button type="submit" class="button">Comprar</button>
                    </form>
                    <form class="buidar" action="buidar_cistella.php" method="POST">
                            <input type="hidden" name="currentFile" value="' . $currentPage . '">
                            <button type="submit" class="buttonVaciarCesta">Vaciar</button>     
                    </form>
                </article>';
                ?>
            </div>
            <!--end shopping-cart -->
        </div>
    </section>
    <section class="nav_mobile">
        <nav>
            <a class="img_nav" href="index.php">
                <img src="Guidline/BrandMark/Logotipo-_1_.svg" alt="logo-juan">
            </a>
            <ul class="paneles_nav">
                <li class="button-nav upper-case">
                    <a class="info_panel" href="Productos.php">Productos</a>
                </li>
                <li><a href="#" class="info_panel" id="cart"> CART </a></li>
            </ul>
            <a class="login button-nav upper-case" href="login.php">
                <i class="fas fa-user"></i>
            </a>
        </nav>

        <!--DESPLEGABLE CISTELLA-->
        <div class="container">
            <div class="shopping-cart">
                <div class="shopping-cart-total">
                    <p>Total:</p>
                    <p class="total">
                        <?php
                        include "getTotal_cistella.php";
                        ?>
                    </p>
                </div>
                <div class="shopping-cart-header">
                </div>

                <?php
                session_start();
                require_once "model.php";

                //CISTELLA
                $laMevaCistella = new Cistella();
                $currentPage = $_SERVER['SCRIPT_NAME'];
                if (isset($_SESSION['cistella_serialitzada'])) {
                    $cistella_sesion = $_SESSION['cistella_serialitzada'];
                    $productesSessio = unserialize($cistella_sesion);
                    if (!empty($productesSessio)) {
                        foreach ($productesSessio as $producteCistella) {
                            echo '
                            <section class="shopping-cart-items">
                                <article class="clearfix">
                                    <article class="imgTxtCart">
                                        <img width="20%" src="./CRUD' . $producteCistella->fotos . '" alt="item1" />
                                        <p class="item-name">' . $producteCistella->titol . '</p>
                                    </article>
                                    <article class="infoCompraCart">
                                        <article class="detallesCart">
                                                <p class="txtCaracteristicasCompraCart">Precio:</p>
                                                <p class="item-price">' . $producteCistella->preu . '€</p>
                                        </article>
                                        <article class="detallesCart2">
                                            <p class="txtCaracteristicasCompraCart">Cantidad:</p>
                                            <p class="item-quantity">' . $producteCistella->quantitat . '</p>
                                        </article>
                                        <form action="eliminar_cistella.php" method="POST">
                                            <input type="hidden" name="currentFile" value="' . $currentPage . '">
                                            <input type="hidden" name="eliminaProducte" value="' . $producteCistella->id . '"/>
                                            <button type="submit" class="buttonEliminar">Eliminar</button>
                                        </form>
                                    </article>
                                </article>
                            </section>';
                        }
                    } else {
                        echo '
                        <section class="shopping-cart-items">
                            <article class="clearfix">
                                <p class="item-name" style="padding-left: 3%;">La cesta está vacía</p>
                            </article>
                        </section>';
                    }
                }

                $currentPage = $_SERVER['SCRIPT_NAME'];
                echo '
                <article class="comprarYVaciarCart">
                    <form class="comprar" action="checkout.php" method="POST">
                            <button type="submit" class="button">Comprar</button>
                    </form>
                    <form class="buidar" action="buidar_cistella.php" method="POST">
                            <input type="hidden" name="currentFile" value="' . $currentPage . '">
                            <button type="submit" class="buttonVaciarCesta">Vaciar</button>     
                    </form>
                </article>';
                ?>
            </div>
            <!--end shopping-cart -->
        </div>
    </section>


    <!-- IMAGEN PROMO -->
    <img class="imgPromo" src="Imatges/ImgHeaderPromo.png" width="100%" alt="img-promo">
    <!-- INFO DE JUAN Y LA TIENDA -->
    <section class="secc_info">
        <article class="display-flex juan">
            <img class="imgJuan" src="Imatges/Juan.jpg" alt="img-juan">
            <div data-aos="slide-right">
                <h1 class="header1">Historia de Juan</h1>
                <p class="txt_info">JuanShop es una tienda creada por Juan, un pequeño empresario con grandes metas, que se encuentra en el barrio de Trinitat Nova, donde empezó su proyecto.
                    Este lleva más de 5 años ayudando a la gente del vecindario y gracias a todo el apoyo que ha recibido por parte de los clientes ha decidido dar el salto de digitalizar su negocio.
                </p>
            </div>
        </article>
        <article class="display-flex local">
            <div data-aos="slide-left">
                <h1 class="header1">¿A qué nos dedicamos?</h1>
                <p class="txt_info">Llevamos más de 15 años al lado de nuestro vecindario, construyendo y adaptándonos a lo que necesitamos a medida que hemos ido avanzando.
                    No obstante, no es tanto todo lo que hemos hecho sino nuestra manera de hacerlo. Por ello, hemos decidido dar el salto y no queremos tan solo ayudar
                    a los clientes de nuestro barrio sino que a la península entera. Queremos que tengas claro que puedes esperar de nosotros y en qué centramos nuestros esfuerzos día a día.
                    Para que sepas que puedes esperar de JuanShop si decides formar parte de esta familia.
                </p>
            </div>
            <img class="imgLocal" src="Imatges/Principal1.jpg">
        </article>
        <section data-aos="fade-up" class="display-flex img_galeria tienda_grande">
            <article class="img_tienda">
                <img class="img_tienda_tag" src="Imatges/Principal2.jpg" width="100%" alt="img-tienda-1">
            </article>
            <article class="img_tienda">
                <img class="img_tienda_tag" src="Imatges/Secció1.jpg" width="100%" alt="img-tienda-1">
            </article>
            <article class="img_tienda display-none">
                <img class="img_tienda_tag" src="Imatges/Varietat.jpg" width="100%" alt="img-tienda-1">
            </article>
            <article class="img_tienda display-none">
                <img class="img_tienda_tag" src="Imatges/Detallat.jpg" width="100%" alt="img-tienda-1">
            </article>
        </section>
    </section>

    <!-- PRODUCTES DESTACATS -->
    <a name="products"></a>
    <section class="tituloProductosPg">
        <article class="titol-seccio">
            <h2>Productos destacados</h2>
        </article>
    </section>
    <section class="products">
        <?php
            session_start();
            require_once "CRUD/config.php";
            
            $sql = "SELECT * FROM PRODUCTE WHERE destacat = 1";
        
            $result  = mysqli_query($connexio, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            echo
                '<article class="product" data-aos="zoom-in" data-aos-duration="600" data-aos-once="true">
            <img src="CRUD' . $row["foto1"] . '">
        <p class="prod-cat upper-case">' . $row["categoria"] . '</p>
        <a href="Productos.php">
            <p class="prod-name font-weight-bold">' . $row["titol"] . '</p>
        </a>
        <p class="prod-desc">' . $row["caracteristiques"] . '</p>
        <div class="stars">
            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
            <img src="Guidline/Icones/star.svg" alt="star">
        </div>
        <p class="prod-price font-weight-bold">' . $row["preu"] . '</p>
    </article>';
                }
            }
        ?>

    </section>

    <!--NOTÍCIES-->
    <a name="news"></a>
    <section class="tituloProductosPg">
        <article class="titol-seccio">
            <h2 class="font-weight-bold header2">Noticias</h2>
        </article>
    </section>
    <section class="noticias">
        <section class="noticia">
            <article>
                <img class="imgNoticia" src="Imatges/noticies/noticia1.jpg" alt="noticia1">
            </article>
            <article>
                <a target="_blank" href="https://www.eitb.eus/es/radio/radio-euskadi/programas/ganbara/detalle/8383978/como-mejorar-senal-wifi-y-tener-internet-en-toda-casa/">
                    <h2 class="tituloNoticia">Cómo mejorar la señal Wi-Fi y tener internet en toda la casa</h2>
                </a>
                <p class="txtNoticia">El lugar donde lo colocamos influye mucho en la señal, por lo que podemos pagarlo caro. Lo ideal es situarlo en el centro exacto de tu domicilio, lo que ayudará a que la señal se reparta por toda la casa.</p>
                <article class="DescNoticias">
                    <b>
                        <p class="txtAutor">Eva Rodríguez de Luis</p>
                    </b>
                    <p class="txtAutor">15/10/2021</p>
                </article>
            </article>

        </section>
        <section class="noticia">
            <article>
                <img class="imgNoticia" src="Imatges/noticies/noticia2.jpg" alt="noticia2">
            </article>
            <article>
                <a target="_blank" href="https://www.eitb.eus/es/radio/radio-euskadi/programas/ganbara/detalle/8369496/whatsapp-facebook-e-instagram-caidos-a-escala-mundial-que-ha-pasado/">
                    <h2 class="tituloNoticia">WhatsApp, Facebook e Instagram caídos a escala mundial, ¿qué ha pasado?</h2>
                </a>
                <p class="txtNoticia">En la sección de tecnología de consumo de "Ganbara" de Radio Euskadi, Eva García de Luis, Xataka, da las claves de lo ocurrido con la caída mundial de WhatsApp, Facebook e Instagram.</p>
                <article class="DescNoticias">
                    <b>
                        <p class="txtAutor">Eva Rodríguez de Luis</p>
                    </b>
                    <p class="txtAutor">08/10/2021</p>
                </article>
            </article>
        </section>
    </section>

    <!-- CONTACTE -->
    <a name="contact"></a>
    <section class="tituloProductosPg">
        <article class="titol-seccio">
            <h2 class="font-weight-bold header2">Contacto</h2>
        </article>
    </section>

    <section class="contact">
        <article>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.3550016172017!2d2.184341916094306!3d41.4532150998734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4bcfdad2100a9%3A0x3c4e7db0a61a83e0!2sInstitut%20Tecnol%C3%B2gic%20de%20Barcelona!5e0!3m2!1sca!2ses!4v1634823396378!5m2!1sca!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </article>
        <article class="info">
            <h4 class="font-weight-bold header4">Juan Shop</h4>
            <p class="parag">Calle Aiguablava, 121</p>
            <p class="parag">08033 Barcelona. Cataluña, España</p>
            <p class="parag">641257895</p>
            <p class="parag">juanshop@gmail.com</p>
            <div class="display-flex">
                <a href="https://ca-es.facebook.com/" target="_blank">
                    <img src="Guidline/Icones/facebook copy.svg" class="icon-social" alt="icono-fb">
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="Guidline/Icones/instagram copy.svg" class="icon-social" alt="icono-ig">
                </a>
                <a href="https://twitter.com/?lang=ca" target="_blank">
                    <img src="Guidline/Icones/twitter copy.svg" class="icon-social" alt="icono-tw">
                </a>
                <a href="https://www.tiktok.com/" target="_blank">
                    <img src="Guidline/Icones/tiktok copy.svg" class="icon-social" alt="icono-tiktok">
                </a>
            </div>
        </article>
    </section>

    <!--FOOTER-->
    <footer class="footer">
        <section class="secc_comunitat">
            <p class="txt_footer">Comunidad: </p>
            <ul class="display-flex">
                <li>
                    <a href="https://ca-es.facebook.com/" target="_blank">
                        <img class="icon-social" src="Guidline/Icones/facebook.svg" alt="icono-fb">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_blank">
                        <img class="icon-social" src="Guidline/Icones/instagram.svg" alt="icono-ig">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/?lang=ca" target="_blank">
                        <img class="icon-social" src="Guidline/Icones/twitter.svg" alt="icono-tw">
                    </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/" target="_blank">
                        <img class="icon-social" src="Guidline/Icones/tiktok.svg" alt="icono-tiktok">
                    </a>
                </li>
            </ul>
        </section>
        <section class="secc_ajuda">
            <p class="txt_footer">Ayuda:</p>
            <ul>
                <li>
                    Politica de Privacidad
                </li>
                <li>
                    <a href="#contact">Contacto</a>
                </li>
                <li>
                    Politica de Cookies
                </li>
            </ul>
        </section>
        <section>
            <a href="#start"><img class="icon_footer" src="Guidline/BrandMark/Logotipo.svg" alt="logo-juan" width="100px" height="100px"></a>
        </section>
    </footer>

</body>

</html>