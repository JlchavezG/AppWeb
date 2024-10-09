<?php 
$NameServer = "localhost";
$NameUser = "root";
$PassServer = "";
$Bd = "AppWeb";
$Conection = new mysqli($NameServer, $NameUser, $PassServer, $Bd);
if($Conection->connect_error){
    die("Error al conectar con la base de datos". $Conection->connect_error);
}

?>