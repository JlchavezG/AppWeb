<?php 
// recordar la sesion 
session_start();
// eliminar alertas no deseadas 
error_reporting(0);
// validar que el usuari pase por el login 
$Usuario = $_SESSION['Usuario'];
if(!isset($Usuario)){
header("location:index");
}
// variables globales para los procesos del sistema 
$Accion = "Ingreso a la plataforma";
$Accion2 = "Salida de la plataforma";
// configurar la zona horaria de nuestro servidor
ini_Set('date.timezone','America/Mexico_City');
$fecha = date('Y-m-d');
$tiempo = date('H:i:s');
$hora = date('H');
// realizar saludo segun el horario en el servidor 
$hora_actual = date('H');
if ($hora_actual >= 5 && $hora_actual < 12) {
    $saludo = 'Buenos días';
} elseif ($hora_actual >= 12 && $hora_actual < 18) {
    $saludo = 'Buenas tardes';
} else {
    $saludo = 'Buenas noches';
}
// consulta para extraer todos los datos del usuario que ingresa al sistema con inner join 

?>