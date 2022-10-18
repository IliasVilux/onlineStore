<?php
//1) Les dades de la meva bbddaes
$dbname = "nilmiro7e4_catalegprojecte1";
$user = "245095_root";
$password = "P@ssw0rd1234.";
$servidor = "mysql-nilmiro7e4.alwaysdata.net";

//2) Creo la connexio
// try {
//   $dsn = "mysql:host=$servidor;dbname=$dbname";
//   $laMevaConnexió = new PDO($dsn, $user, $password);
//   $laMevaConnexió->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); //per a que hem retorni tots el errors
// } catch (PDOException $e){
//   echo $e->getMessage();
//   echo "\nError fatal de la muerte mundial";
//   exit();
// }

$connexio = mysqli_connect($servidor, $user, $password, $dbname);
?>