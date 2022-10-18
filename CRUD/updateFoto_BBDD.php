<?php

  $colFotos;
  $valueFotos;
  $id;

if(isset($last_id)) {
  $id = $last_id;
} else {
  $id = $idProdModificar;
}

  //foto1
  if (isset($_FILES['foto1']['name']) && !empty($_FILES['foto1']['name'])) {
    
      exec ("find " . $folderPath . " -type d -exec chmod 777 {} +");
      mkdir("." . $folderPath);
      exec ("find " . $folderPath . " -type d -exec chmod 777 {} +");

    $fotoName  = $_FILES['foto1']['name'];
  
    if ($fotoName != "" || $fotoName != NULL) {
        unlink("." . $folderPath . $fotoName);
    }
    if (!file_exists("$folderPath/$fotoName")) {
      move_uploaded_file($_FILES['foto1']['tmp_name'], "." . $folderPath . "/" . $fotoName);
    } 

    $valueFotos .= "foto1 = '$folderPath/$fotoName', ";
  }

  //foto2
  if (isset($_FILES['foto2']['name']) && !empty($_FILES['foto2']['name'])) {
    
    exec ("find " . $folderPath . " -type d -exec chmod 777 {} +");
    mkdir("." . $folderPath);
    exec ("find " . $folderPath . " -type d -exec chmod 777 {} +");
  
    $fotoName  = $_FILES['foto2']['name'];
  
    if (!file_exists("$folderPath/$fotoName")) {
      move_uploaded_file($_FILES['foto2']['tmp_name'], "." . $folderPath . "/" . $fotoName);
    }

    $valueFotos .= "foto2 = '$folderPath/$fotoName', ";
  }

  //foto3
  if (isset($_FILES['foto3']['name']) && !empty($_FILES['foto3']['name'])) {
    
    exec ("find " . $folderPath . " -type d -exec chmod 777 {} +");
    mkdir("." . $folderPath);
    exec ("find " . $folderPath . " -type d -exec chmod 777 {} +");
  
    $fotoName  = $_FILES['foto3']['name'];
  
    if (!file_exists("$folderPath/$fotoName")) {
      move_uploaded_file($_FILES['foto3']['tmp_name'], "." . $folderPath . "/" . $fotoName);
    } 

    $valueFotos .= "foto3 = '$folderPath/$fotoName', ";
  }

  //queries
  $valueFotos=  rtrim($valueFotos, ", ");

  $sqlFoto = "UPDATE PRODUCTE SET ". $valueFotos . " WHERE id = " . $id . ";";

  if (mysqli_query($connexio, $sqlFoto)) {
  } else {
    echo "error";
  };