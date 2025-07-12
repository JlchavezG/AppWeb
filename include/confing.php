<?php 
// eliminar alertas no deseadas 
error_reporting(0);
// recordar la sesion 
session_start();
// validar que el usuari pase por el login 
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
  header("location:index");
}
// Tiempo de inactividad permitido (en segundos)
$tiempo_inactividad = 300; // 5 minuto
// Validar inactividad del usuario
if (isset($_SESSION['ultimo_acceso'])) {
    $tiempo_transcurrido = time() - $_SESSION['ultimo_acceso'];
    if ($tiempo_transcurrido > $tiempo_inactividad) {
        session_unset();     // eliminar variables de sesión
        session_destroy();   // destruir la sesión
        $Online = $user['Id_Usuarios'];
        $on = "UPDATE Usuarios SET OnlineEstatus = '0' WHERE Id_Usuarios = $Online";
        $line = $Conection->query($on);
        header("Location: index"); // redirigir al login
        exit();
    }
}
$_SESSION['ultimo_acceso'] = time(); // actualizar último acceso
$usuario = $Conection->real_escape_string($_SESSION['Usuario']);
// consulta para extraer todos los datos del usuario que ingresa al sistema con inner join 
$IngresaUser = "SELECT U.Id_Usuarios, U.NombreUser, U.ApellidoP, U.ApellidoM, U.TelefonoUser, U.EmailUser, U.Tusuario, U.UserName, 
    U.FechReg, U.FechNacUser, U.Id_Genero, U.ImgUser, U.EstatusUser, U.OnlineEstatus, TU.Id_Tusuario, TU.NomTuser, G.Id_Genero, G.NomGenero  
    FROM Usuarios U INNER JOIN TipoUsuario TU ON U.Tusuario = TU.Id_Tusuario INNER JOIN 
    Genero G ON U.Id_Genero = G.Id_Genero WHERE U.UserName = '$usuario'";
$EIngresaUser = $Conection->query($IngresaUser);
$UserOnline = $EIngresaUser->fetch_array();   
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


