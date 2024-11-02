<?php
session_start();
include 'conection.php';
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
  header("location:index");
}
// consulta para exraer los datos del usuario conectado
$consulta = "SELECT * FROM Usuarios WHERE UserNick = '$usuario'";
$r = $Conection->query($consulta);
$extraer = $r->fetch_array();
if($extraer > 0){
  $user = $extraer;
  $Online = $user['Id_Usuarios'];
  $on = "UPDATE Usuarios SET OnlineEstatus = '0' WHERE Id_Usuarios = $Online";
  $line = $Conection->query($on);
}
  session_unset();
  session_destroy();
  header("location:../index");
 ?>
