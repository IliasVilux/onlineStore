<?php
    require_once "model.php";

    //CISTELLA
    $laMevaCistella = new Cistella();

    if(isset($_SESSION['cistella_serialitzada'])) {
        $cistella_sesion = $_SESSION['cistella_serialitzada'];
        $laMevaCistella->productesCistella = unserialize($cistella_sesion);
    }

    //GET TOTAL
    $total = $laMevaCistella->getTotal();

    echo $total . " €";

?>