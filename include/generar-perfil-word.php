<?php
// Conexión y sesión
include 'conection.php';
session_start();

// Verificar sesión iniciada
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
    header("location:index");
}
// Obtener datos del usuario
// consulta para extraer todos los datos del usuario que ingresa al sistema con inner join 
$IdUser = $_GET['id_Usuario'];
$IngresaUser = "SELECT U.Id_Usuarios, U.NombreUser, U.ApellidoP, U.ApellidoM, U.TelefonoUser, U.EmailUser, U.Tusuario, U.UserName, 
    U.FechReg, U.FechNacUser, U.Id_Genero, U.ImgUser, U.EstatusUser, U.OnlineEstatus, U.UltimoAcceso,TU.Id_Tusuario, TU.NomTuser, TU.DescTuser, G.Id_Genero, G.NomGenero  
    FROM Usuarios U INNER JOIN TipoUsuario TU ON U.Tusuario = TU.Id_Tusuario INNER JOIN 
    Genero G ON U.Id_Genero = G.Id_Genero WHERE U.Id_Usuarios = '$IdUser'";
$EIngresaUser = $Conection->query($IngresaUser);
$UserOnline = $EIngresaUser->fetch_array();

// Configurar para descarga como Word
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Perfil_Usuario_" . preg_replace("/[^a-zA-Z0-9]/", "_", $UserOnline['NombreUser']) . ".doc");
header("Pragma: no-cache");
header("Expires: 0");
?>

<html xmlns:o='urn:schemas-microsoft-com:office:office'
      xmlns:w='urn:schemas-microsoft-com:office:word'
      xmlns='http://www.w3.org/TR/REC-html40'>

<head>
    <meta charset="UTF-8">
    <title>Perfil del Usuario</title>
    <style>
        body {
            font-family: 'Calibri', sans-serif;
            padding: 30px;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 26px;
            color: #1E90FF;
            border-bottom: 2px solid #1E90FF;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .perfil {
            width: 80%;
            margin: 0 auto;
        }

        .campo {
            margin-bottom: 20px;
        }

        .campo label {
            font-weight: bold;
            font-size: 16px;
            color: #1E90FF;
            display: inline-block;
            width: 180px;
        }

        .campo span {
            font-size: 16px;
            color: #555;
        }
        .subtitulos{
            margin-top: 10px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }

        .linea {
            border-top: 1px solid #CCC;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <h1>Perfil Profesional del Usuario</h1>
    <div class="linea"></div>
    <p class="subtitulos">Este formato contiene informacion que solo el usuario del sistema puede generar</p>
    <div class="perfil">
        <div class="campo">
            <label><strong>Nombre completo:</strong>&nbsp;</label><span><?= htmlspecialchars($UserOnline['NombreUser']." ".$UserOnline['ApellidoP']." ".$UserOnline['ApellidoM']) ?></span>
        </div>
        <div class="campo">
            <label><strong>Correo electrónico:</strong>&nbsp;</label><span><?= htmlspecialchars($UserOnline['EmailUser']) ?></span>
        </div>
        <div class="campo">
            <label><strong>Teléfono:</strong>&nbsp;</label><span><?= htmlspecialchars($UserOnline['TelefonoUser']) ?></span>
        </div>
        <div class="campo">
            <label><strong>Nombre de Usuario:</strong>&nbsp;</label><span><?= htmlspecialchars($UserOnline['UserName']) ?></span>
        </div>
        <div class="campo">
            <label><strong>Fecha de Nacimiento:</strong>&nbsp;</label><span><?= htmlspecialchars($UserOnline['FechNacUser']) ?></span>
        </div>
        <div class="campo">
            <label><strong>Rol o perfil:</strong>&nbsp;</label><span><?= htmlspecialchars($UserOnline['NomTuser']) ?></span>
        </div>
        <div class="campo">
            <label><strong>Ultimo Acceso al sistema:</strong>&nbsp;</label><span><?= htmlspecialchars($UserOnline['UltimoAcceso'])  ?></span>
        </div>
        <div class="campo">
            <label><strong>Fecha de ingreso:</strong></strong>&nbsp;</label><span><?= date("d/m/Y", strtotime($UserOnline['FechReg'])) ?></span>
        </div>
    </div>

    <div class="linea"></div>

    <div class="footer">
        Documento generado automáticamente desde el sistema. <br>
        Fecha: <?= date("d/m/Y H:i:s") ?>
    </div>
</body>
</html>