<?php
//-1) Inicio el debug dels errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//3) Importo el productes i la config de la bbdd coneexió
include_once("../model.php");
include_once("../cataleg.php");
include_once("config.php");

//3.2) Comprovo que puc inserir un producte // primer tinc que crear la taula productes del arxus bbdd.sql
//per a fer quadrar els atributs de l’objecte amb els que demana el inter into faig un metode toArray() que retorna un array amb els atributs adqüats
//
function toArray($prod){
    $tmpArray = array(
         "titol"=>$prod->titol,
         "categoria"=>$prod->categoria,
         "preu"=>$prod->preu,
         "descripcio"=>$prod->descripcio,
         "colors"=>isset($prod->colors[0]) ? $prod->colors[0] : NULL,
         "stoc"=>$prod->stoc,
         "caracteristiques"=>$prod->caracteristiques,
         "especificacions"=>$prod->especificacions,
         "quantitat"=>$prod->quantitat,
         "fotos"=>isset($prod->fotos[0]) ? $prod->fotos[0] : NULL
     );
     return $tmpArray;
 }
//var_dump((array)$producte1->toArray());

//4) Preparo la sentencia
$laMevaSentencia = $laMevaConnexió->prepare('INSERT INTO
   PRODUCTE (titol,categoria,preu,descripcio,colors,stoc,caracteristiques,especificacions,quantitat,fotos)
   value (
       :titol,
       :categoria,
       :preu,
       :descripcio,
       :colors,
       :stoc,
       :caracteristiques,
       :especificacions,
       :quantitat,
       :fotos)
   ');
//5) Executo la sentencia
//$laMevaSentencia->execute($producte1->toArray());

//6)Recorrem el array hardoced amb el productes i els introduim a la bbdd
foreach($elMeuCataleg->productesCataleg as $producte){
   $laMevaSentencia->execute(toArray($producte));
}
