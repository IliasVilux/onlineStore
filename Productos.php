<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="Guidline/BrandMark/Isotipo.png" type="image/icon type">
    <title>Productos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
            $(document).ready(function(){
                $(".shopping-cart").fadeOut(0);
                $("#cart").click(function() {
                    $(".shopping-cart").fadeToggle(200);
                });
                $("#cart2").click(function() {
                    $(".shopping-cart").fadeToggle(200);
                });
            });
    </script>
</head>
<body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
     <!-- PARTE DEL NAV -->
    <section class="nav_global display-flex">
        <nav>
            <a class = "img_nav" href="index.php">
                <img src="Guidline/BrandMark/Logotipo-_1_.svg" alt="logo-juan">
            </a>
            <ul class = "paneles_nav"> 
                <li class = "button-nav upper-case">
                    <a class = "info_panel" href="Productos.php">Productos</a>
                </li>
                <li class = "button-nav upper-case">
                    <a class = "info_panel" href="index.php">Noticias</a>
                </li>
                <li class = "button-nav upper-case">
                    <a class = "info_panel" href="index.php">Contacto</a>
                </li>
                <li><a href="#" class="info_panel" id="cart"> CART </a></li>
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
                if(isset($_SESSION['cistella_serialitzada'])) {
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
            </div> <!--end shopping-cart -->
        </div>
    </section>
    <section class = "nav_mobile">
        <nav>
            <a class = "img_nav" href="index.php">
                <img src="Guidline/BrandMark/Logotipo-_1_.svg" alt="logo-juan">
            </a>
            <ul class = "paneles_nav"> 
                <li class = "button-nav upper-case">
                    <a class = "info_panel" href="Productos.php">Productos</a>
                </li>
                <li><a href="#" class="info_panel" id="cart2"> CART </a></li>
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
                if(isset($_SESSION['cistella_serialitzada'])) {
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
            </div> <!--end shopping-cart -->
        </div>
    </section>
    <!-- PRODUCTES-->
    <a name="products"></a>
    <section class="tituloProductosPg">
        <article class="titol-seccio">
            <h2 class="font-weight-bold header2">Productos</h2>
        </article>
    </section>

    <!-- PRODUCTES CATALEG-->
    <section class="products">
        <?php 
            require_once "CRUD/config.php";
            require_once "cataleg.php";

            $sql = "SELECT * FROM PRODUCTE";
            $result  = mysqli_query($connexio, $sql);
            $contador = 1;

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($contador%4 != 0) {
                        echo '<article class="product" data-aos="zoom-in" data-aos-duration="600" data-aos-once="true">
                        <img src="CRUD' . $row["foto1"] . '">
                        <p class="prod-cat upper-case">' . $row["categoria"] . '</p>
                        <a style="cursor: pointer;" class="popup-btn"><p class="prod-name font-weight-bold">' . $row["titol"] . '</p></a>
                        <p class="prod-desc">' . $row["descripcio"] . '</p>
                        <div class="stars">
                            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
                            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
                            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
                            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
                            <img src="Guidline/Icones/star.svg" alt="star">
                        </div>
                        <p class="prod-price font-weight-bold">' . $row["preu"] . '€</p>
                        </article>';
                    } else {
                        echo '<article class="product" data-aos="zoom-in" data-aos-duration="600" data-aos-once="true">
                        <img src="CRUD' . $row["foto1"] . '">
                        <p class="prod-cat upper-case">' . $row["categoria"] . '</p>
                        <a  style="cursor: pointer;" class="popup-btn"><p class="prod-name font-weight-bold">' . $row["titol"] . '</p></a>
                        <p class="prod-desc">' . $row["descripcio"] . '</p>
                        <div class="stars">
                            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
                            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
                            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
                            <img src="Guidline/Icones/star-fill.svg" alt="star-fill">
                            <img src="Guidline/Icones/star.svg" alt="star">
                        </div>
                        <p class="prod-price font-weight-bold">' . $row["preu"] . '€</p>
                        </article>
                        </section>
                        <section class="products">';
                    }
                    $contador++;
                }
                echo '</section>
                <section>';
            }                    
                

        ?>
    <!-- PRODUCTES POPUP-->
        <?php 
           session_start();
           require_once "CRUD/config.php";

            $sql = "SELECT * FROM PRODUCTE";
            $result  = mysqli_query($connexio, $sql);

            /*---------------------------------*/

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="popup-view">
                   <div class="popup-card">
                       <a><i class="fas fa-times close-btn"></i></a>
                       <section class="popup-producto">
                       <article class="imgProd_popup">
                           <div class="slideshow-container">';
                                echo 
                                '<div class="foto_princ">
                                    <img id="imgBorde" src="CRUD' . $row["foto1"] . '" style="width: 200px";">
                                </div>';
                                echo
                                '<div class="foto_lat">
                                        <img id="imgBorde" src="CRUD' . $row["foto2"] . '" style="width: 100px";">
                                </div>
                                <div class="foto_lat">
                                        <img id="imgBorde" src="CRUD' . $row["foto3"] . '" style="width: 100px";">
                                </div>';
                                echo '
                            </div>
                        </article>
                        <article class="descProd_popup">
                            <p class="prod-cat upper-case">' . $row["categoria"] . '</p>
                            <h2>' . $row["titol"] . '</h2>
                            <p class="resum">' . $row["descripcio"] . '</p>
                            <section class="specs_totales_popup">
                                <article class="specs_popup"> 
                                    <h3 class="titulo_popup">Especificaciones</h3>
                                    <p class="detalle">' . $row["especificacions"] . '</p>
                                </article>
                                <article class="specs_popup detalle-caract">
                                    <h3 class="titulo_popup">Características</h3>
                                    <p class="detalle">' . $row["caracteristiques"] . '</p>
                                </article>
                                    
                            </section>
                            <form class="CantPriceyComprarPopUp" action="afegir_cistella.php" method="POST">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                    <input type="hidden" name="producte" id="producte" value="' . $row["id"] . '"/>
                                <button class="botonCompra" type="submit">añadir al carrito</button>
                            </form>
                            <h2 class="price">' . $row["preu"] . '€</h2>
                        </article>
                        </section>
                    </div>
                </div>';
                }
            }

            /*---------------------------------*/
/* 
           foreach($elMeuCataleg->productesCataleg as $producte) {

               echo '<div class="popup-view">
                   <div class="popup-card">
                       <a><i class="fas fa-times close-btn"></i></a>
                       <section class="popup-producto">
                       <article class="imgProd_popup">
                           <div class="slideshow-container">';
                            $numFoto = 0;
                               foreach ($producte->fotos as $foto) {
                                   if ($numFoto == 0) {
                                        echo 
                                        '<div class="foto_princ">
                                            <img id="imgBorde" src="' . $foto . '" style="width: 200px";>
                                        </div>';
                                   } else {
                                        if ($numFoto == 1) {
                                            echo '<div class="foto_lat">';
                                        }
                                        echo 
                                            '<img id="imgBorde" src="' . $foto . '" style="width: 100px";>';
                                        if ($numFoto == 2) {
                                            echo '</div>';
                                        } 
                                   }
                                   $numFoto++;
                                }
                            echo '
                            </div>
                        </article>
                        <article class="descProd_popup">
                            <p class="prod-cat upper-case">' . $producte->categoria . '</p>
                            <h2>' . $producte->titol . '</h2>
                            <p class="resum">' . $producte->descripcio . '</p>
                            <section class="specs_totales_popup">
                                <article class="specs_popup"> 
                                    <h3 class="titulo_popup">Especificaciones</h3>
                                    <p class="detalle">' . $producte->especificacions . '</p>
                                </article>
                                <article class="specs_popup detalle-caract">
                                    <h3 class="titulo_popup">Características</h3>
                                    <p class="detalle">' . $producte->caracteristiques . '</p>
                                </article>
                                    
                            </section>
                            <form class="CantPriceyComprarPopUp" action="afegir_cistella.php" method="POST">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                    <input type="hidden" name="producte" id="producte" value="' . $producte->id . '"/>
                                <button class="botonCompra" type="submit">añadir al carrito</button>
                            </form>
                            <h2 class="price">' . $producte->preu . '€</h2>
                        </article>
                        </section>
                    </div>
                </div>';
            }; */
        ?>
    </section>

    <!--FOOTER-->
    <footer class="footer">
        <section class="secc_comunitat">
            <p class="txt_footer">Comunidad: </p>
            <ul class="display-flex"> 
                <li>
                    <a href="https://ca-es.facebook.com/"  target="_blank">
                        <img  class="icon-social" src="Guidline/Icones/facebook.svg" alt="icono-fb">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/"  target="_blank">
                        <img  class="icon-social" src="Guidline/Icones/instagram.svg" alt="icono-ig">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/?lang=ca"  target="_blank">
                        <img  class="icon-social" src="Guidline/Icones/twitter.svg" alt="icono-tw">
                    </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/"  target="_blank">
                        <img  class="icon-social" src="Guidline/Icones/tiktok.svg" alt="icono-tiktok">
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
                    <a href="index.php">Contacto</a>
                </li>
                <li>
                    Politica de Cookies
                </li>
            </ul>
        </section>
        <section>
            <a href="index.php"><img  class="icon_footer" src="Guidline/BrandMark/Logotipo.svg" alt="logo-juan" width="100px" height="100px"></a>
        </section>
    </footer>
    <!--SCRIPT-->
    <script type="text/javascript">
        var popupViews = document.querySelectorAll('.popup-view');
        var popupBtns = document.querySelectorAll('.popup-btn');
        var closeBtns = document.querySelectorAll('.close-btn');
    
        //javascript for quick view button
        var popup = function(popupClick){
          popupViews[popupClick].classList.add('active');
        }
    
        popupBtns.forEach((popupBtn, i) => {
          popupBtn.addEventListener("click", () => {
            popup(i);
          });
        });
    
        //javascript for close button
        closeBtns.forEach((closeBtn) => {
          closeBtn.addEventListener("click", () => {
            popupViews.forEach((popupView) => {
              popupView.classList.remove('active');
            });
          });
        });
    </script>
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="scriptBotonCantidad.js"></script>

</body>
</html>