<?php
// eliminar alertas no deseadas 
error_reporting(0);
// recordar la sesion 
session_start();
// validar que el usuari pase por el login 
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
    header("location:index");
}
// Tiempo máximo de inactividad en segundos (5 minutos)
$inactividad = 300;
// Verifica si hay tiempo registrado en la sesión
if (isset($_SESSION['ultimo_movimiento'])) {
    $tiempoInactivo = time() - $_SESSION['ultimo_movimiento'];
    if ($tiempoInactivo > $inactividad) {
        // Cerrar sesión automáticamente y actualizar estado en BD

        // Incluye conexión si no se ha hecho
        include_once 'conection.php';

        if (isset($_SESSION['Usuario'])) {
            $usuario = $_SESSION['Usuario'];
            // Obtener Id_Usuarios
            $getId = "SELECT Id_Usuarios FROM Usuarios WHERE UserName = '$usuario'";
            $result = $Conection->query($getId);
            if ($row = $result->fetch_assoc()) {
                $idUsuario = $row['Id_Usuarios'];

                // Cambiar estado a offline
                $sqlOffline = "UPDATE Usuarios SET OnlineEstatus = 0 WHERE Id_Usuarios = '$idUsuario'";
                $Conection->query($sqlOffline);

                // Registrar logout en historial si tienes historial
                $sqlLogout = "INSERT INTO HistorialAccesos (id_usuario, tipo_acceso) VALUES ('$idUsuario', 'logout')";
                $Conection->query($sqlLogout);
            }
        }

        // Destruir sesión y redirigir
        session_unset();
        session_destroy();
        header("Location: index.php?timeout=1");
        exit();
    }
}

// Actualiza el último movimiento
$_SESSION['ultimo_movimiento'] = time();
// consulta para extraer datos del usuario conectaado
$usuario = $Conection->real_escape_string($_SESSION['Usuario']);
// consulta para extraer todos los datos del usuario que ingresa al sistema con inner join 
$IngresaUser = "SELECT U.Id_Usuarios, U.NombreUser, U.ApellidoP, U.ApellidoM, U.TelefonoUser, U.EmailUser, U.Tusuario, U.UserName, 
    U.FechReg, U.FechNacUser, U.Id_Genero, U.ImgUser, U.EstatusUser, U.OnlineEstatus, TU.Id_Tusuario, TU.NomTuser, TU.DescTuser, G.Id_Genero, G.NomGenero  
    FROM Usuarios U INNER JOIN TipoUsuario TU ON U.Tusuario = TU.Id_Tusuario INNER JOIN 
    Genero G ON U.Id_Genero = G.Id_Genero WHERE U.UserName = '$usuario'";
$EIngresaUser = $Conection->query($IngresaUser);
$UserOnline = $EIngresaUser->fetch_array();

// configurar la zona horaria de nuestro servidor
ini_Set('date.timezone', 'America/Mexico_City');
$fecha = date('d \d\e F \d\e Y \a \l\a\s h:i A');
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


