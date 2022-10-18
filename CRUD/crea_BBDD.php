<?php
  session_start();

  require_once ("config.php");
  
  $items = ['titol','categoria','preu','descripcio','colors','stoc','caracteristiques','especificacions'];
  $columns;
  $values;

  foreach ($items as $item) {

    if(isset($_REQUEST[$item]) && !empty($_REQUEST[$item])) {
      $req = $_REQUEST[$item];
      if ($item != "preu" && $item != "stoc") {
        $columns .= "$item, ";
        $values .= "'$req', ";
      } else  {
        $columns .= "$item, ";
        $values .= "$req, ";
      }
    }
  }

  $start = "INSERT INTO PRODUCTE ";
  $end = ";";
  $columns=rtrim($columns, ", ");
  $values=rtrim($values, ", ");

  $sql = $start . " (" . $columns . ") " . " VALUES (" . $values . ") " .$end;

  if (mysqli_query($connexio, $sql)) {
    $last_id = $connexio->insert_id;
  } else {
    echo "error";
  };

  $folderPath = '/' . 'fotos/' . $last_id;

  if (isset($_FILES['foto1']['name']) || isset($_FILES['foto2']['name']) || isset($_FILES['foto3']['name'])) {
    include "updateFoto_BBDD.php";
  }

  echo "<script>location.href='../llistatProductosAdmin.php'</script>"

?>