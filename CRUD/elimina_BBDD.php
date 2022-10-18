<?php
    session_start();

    require_once ("config.php");

    $idProdEliminar = $_REQUEST["elimina"];
    
    $sql = "DELETE from PRODUCTE WHERE id = $idProdEliminar";

    if (mysqli_query($connexio, $sql)) {
        echo "Producte eliminat correctament";
      } else {
        echo "error";
      };

    echo "<script>location.href='../llistatProductosAdmin.php'</script>"

?>