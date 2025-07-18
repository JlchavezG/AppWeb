<?php 
    session_start();
    include 'include/conection.php';
    // consulta para extraer el total de usuarios en el sistema
    $User = "SELECT * FROM Usuarios";
    $EUser = $Conection->query($User);
    $TotalUser = $EUser->num_rows;
    // consulta para extraer a los usuarios online 
    $UserOnline = "SELECT * FROM Usuarios WHERE OnlineEstatus = 1";
    $EUserOnline = $Conection->query($UserOnline);
    $TEUserOnliine = $EUserOnline->num_rows;

    $sql = "SELECT fecha_acceso FROM HistorialAccesos WHERE id_usuario = '$IdPersonal' AND tipo_acceso = 'login' ORDER BY fecha_acceso DESC LIMIT 1";
    $resultado = $Conection->query($sql); 
    $ultimoAcceso = 'Nunca';
        if ($fila = $resultado->fetch_assoc()) {
    $ultimoAcceso = $fila['fecha_acceso'];
}
// Guardar en sesión si lo deseas
$_SESSION['UltimoAcceso'] = $ultimoAcceso;


    

    

?>