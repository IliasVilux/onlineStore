<link rel="stylesheet" href="style.css">
<section class = "container_form">
<div style="text-align: center"> <b> Preu Total: </b><p style="color: #6e95f5"><?php include "getTotal_cistella.php";?></p></div>
<?php
    session_start();
    require_once "model.php";

    $laMevaCistella = new Cistella();
    if(isset($_SESSION['cistella_serialitzada'])) {
        $cistella_sesion = $_SESSION['cistella_serialitzada'];
        $productesSessio = unserialize($cistella_sesion);
        if (!empty($productesSessio)) {
            foreach ($productesSessio as $producteCistella) {
                echo '
                <section class="form_cistella">
                    <article class="clearfix">
                        <article class="imgTxtCart">
                            <img width="20%" src="./CRUD' . $producteCistella->fotos .'" alt="item1" />
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
                        </article>
                    </article>
                </section>';
                
            }
        }else {
            echo '
            <section class="shopping-cart-items">
                <article class="clearfix">
                    <p class="item-name" style="padding-left: 3%;">La cesta está vacía</p>
                </article>
            </section>';
        }
    }  
?>
</section>
