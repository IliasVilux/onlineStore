<?php
    session_start();

    require_once "model.php";


    //CISTELLA
    $laMevaCistella = new Cistella();

    if(isset($_SESSION['cistella_serialitzada'])) {
        $cistella_sesion = $_SESSION['cistella_serialitzada'];
        $laMevaCistella->productesCistella = unserialize($cistella_sesion);
    }

    $laMevaCistella->buidar();

    //CISTELLA SESSIO
    $cistella_serialitzada = serialize($laMevaCistella->productesCistella);
    $_SESSION['cistella_serialitzada'] = $cistella_serialitzada;

    //GET UBICACIO
    $ubicacio = $_REQUEST['currentFile'];
    echo "<script>location.href='$ubicacio'</script>";
?>