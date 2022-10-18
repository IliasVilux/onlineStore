<?php
session_start();

require_once("config.php");

$idProdModificar = $_REQUEST["id"];

$items = ['titol', 'categoria', 'preu', 'descripcio', 'colors', 'stoc', 'caracteristiques', 'especificacions'];
$options;
$folderPath = $_REQUEST['fotosPath'];

foreach ($items as $item) {

  if (isset($_REQUEST[$item]) && !empty($_REQUEST[$item])) {
    $req = $_REQUEST[$item];
    if ($item != "preu" && $item != "stoc") {
      $options .= "$item = '$req', ";
    } else {
      $options .= "$item = $req, ";
    }
  }
}

$start = "UPDATE PRODUCTE SET ";
$end = " WHERE id = $idProdModificar;";
$options = rtrim($options, ", ");


$sql = $start . $options . $end;

if (mysqli_query($connexio, $sql)) {
} else {
  echo "error";
};


//UPDATE FOTO

$folderPath = '/' . 'fotos/' . $idProdModificar;

if (isset($_FILES['foto1']) || isset($_FILES['foto2']) || isset($_FILES['foto3'])) {
  include "updateFoto_BBDD.php";
}

echo "<script>location.href='../llistatProductosAdmin.php'</script>";
