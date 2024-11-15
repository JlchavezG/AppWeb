<?php
// Parámetros de conexión
$NameServer = "localhost";
$NameUser = "root";
$PassServer = "";
$Bd = "AppWeb";
// Intento de conexión
$Conection = mysqli_connect($NameServer, $NameUser, $PassServer, $Bd);
// Verificación de errores en la conexión
if ($Conection->connect_error) {
    // Manejo de error usando una excepción
    die("Error al conectar con la base de datos: " . $Conection->connect_error);
} else {
    // Establecer el conjunto de caracteres a UTF-8
    if (!$Conection->set_charset("utf8")) {
        die("Error al cargar el conjunto de caracteres UTF-8: " . $Conection->error);
    }
}
?>