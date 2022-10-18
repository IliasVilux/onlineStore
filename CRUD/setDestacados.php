<?php
session_start();

require_once ("config.php");

$start = "UPDATE PRODUCTE SET ";
$end = " WHERE id = ";
$option = ["destacat = 0", "destacat = 1"];



$sqlNoDest = $start . $option[0] .";";
mysqli_query($connexio, $sqlNoDest);



foreach ($_REQUEST['destacats'] as $prodDestacado) {
  $sql = $start . $option[1] . $end . $prodDestacado. ";";

  if (!mysqli_query($connexio, $sql)) {
    echo "error";
  };
}

echo "<script>location.href='../index.php'</script>"
?>
