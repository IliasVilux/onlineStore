<?php
session_start();

require_once "model.php";
//require_once "cataleg.php";
require_once "CRUD/config.php";

//CISTELLA
$laMevaCistella = new Cistella();

if(isset($_SESSION['cistella_serialitzada'])) {
    $cistella_sesion = $_SESSION['cistella_serialitzada'];
    $laMevaCistella->productesCistella = unserialize($cistella_sesion);
}

// CATALEG
// $elMeuCataleg = new Cataleg();

// if(isset($_SESSION['cataleg_serialitzat'])) {
   // $cataleg_sesion = $_SESSION['cataleg_serialitzat'];
   // $elMeuCataleg->productesCataleg = unserialize($cataleg_sesion);
// }


//QUANTITAT
$quantity = $_REQUEST['quantity'];

//PRODUCTE
$producteId = $_REQUEST['producte'];
//$producte = $elMeuCataleg->getProducteById($producteId);


$producteBBDD = "SELECT * FROM PRODUCTE WHERE id = $producteId";

$resultado = mysqli_query($connexio, $producteBBDD);



if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        //AFEGIR PRODUCTE
        $prod = new Producte;
        $prod->id = $row['id'];
        $prod->titol = $row['titol'];
        $prod->categoria = $row['categoria'];
        $prod->preu = $row['preu'];
        $prod->descripcio = $row['descripcio'];
        $prod->colors = $row['colors'];
        $prod->stoc = $row['stoc'];
        $prod->caracteristiques = $row['caracteristiques'];
        $prod->especificacions = $row['especificacions'];
        $prod->fotos = $row['foto1'];
        $prod->quantitat = $quantity;
        $laMevaCistella->addProducte($prod);
    }
};

//CISTELLA SESSIO
$cistella_serialitzada = serialize($laMevaCistella->productesCistella);
$_SESSION['cistella_serialitzada'] = $cistella_serialitzada;


echo "<script>location.href='Productos.php'</script>";

?>
