<?php
session_start();

require_once("config.php");

$idProdModificar = $_REQUEST["id"];

//DELETE FOTO
if (isset($_REQUEST['delete1']) && !empty($_REQUEST['delete1'])) {
  $img = $_REQUEST['delete1'];
  unlink("." . $img);
  $sqlDeleteFoto = 'UPDATE PRODUCTE SET foto1 = ""  WHERE id =' . $idProdModificar . ';';
  if (mysqli_query($connexio, $sqlDeleteFoto)) {
  } else {
    echo "error";
  };
}
if (isset($_REQUEST['delete2']) && !empty($_REQUEST['delete2'])) {
  $img = $_REQUEST['delete2'];
  unlink("." . $img);
  $sqlDeleteFoto = 'UPDATE PRODUCTE SET foto2 = ""  WHERE id =' .  $idProdModificar .';';
  if (mysqli_query($connexio, $sqlDeleteFoto)) {
  } else {
    echo "error";
  };
}
if (isset($_REQUEST['delete3']) && !empty($_REQUEST['delete3'])) {
  $img = $_REQUEST['delete3'];
  unlink("." . $img);
  $sqlDeleteFoto = 'UPDATE PRODUCTE SET foto3 = ""  WHERE id =' .  $idProdModificar.';';
  if (mysqli_query($connexio, $sqlDeleteFoto)) {
  } else {
    echo "error";
  };
}

echo "<script>location.href='../llistatProductosAdmin.php'</script>";