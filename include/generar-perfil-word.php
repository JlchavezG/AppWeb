<?php 
session_start();
include 'confing.php';
include 'conection.php';
// Variables PHP del perfil

$UserOnline = $_SESSION['UserOnline']; // ← Asegúrate de tenerla cargada
$nombre     = $UserOnline['NombreUser'] . " " . $UserOnline['ApellidoP'] . " " . $UserOnline['ApellidoM'];
$correo     = $UserOnline['EmailUser'];
$telefono   = $UserOnline['TelefonoUser'];
$tipo       = $UserOnline['NomTuser'];
$fecha_hoy  = date("d/m/Y");

// Cabeceras
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Perfil_Usuario.doc");

echo "
<html xmlns:o='urn:schemas-microsoft-com:office:office'
      xmlns:w='urn:schemas-microsoft-com:office:word'
      xmlns='http://www.w3.org/TR/REC-html40'>
<head>
  <meta charset='utf-8'>
  <title>Perfil de Usuario</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 40px; }
    h1 { color:#2F4F4F; border-bottom: 2px solid #000; padding-bottom: 10px; }
    .section-title { font-weight: bold; color: #333333; font-size: 16px; margin-top: 20px; }
    table { width: 100%; border-collapse: collapse; margin-top: 10px; }
    td { padding: 8px; vertical-align: top; }
    .label { font-weight: bold; width: 25%; background-color: #f2f2f2; }
    .value { width: 75%; }
    .footer { margin-top: 40px; font-size: 12px; color: #555; text-align: center; border-top: 1px solid #ccc; padding-top: 10px; }
  </style>
</head>
<body>

<h1>🧾 Perfil de Usuario</h1>

<p class='section-title'>Información general</p>
<table>
  <tr>
    <td class='label'>Nombre completo:</td>
    <td class='value'>$nombre</td>
  </tr>
  <tr>
    <td class='label'>Correo electrónico:</td>
    <td class='value'>$correo</td>
  </tr>
  <tr>
    <td class='label'>📞 Teléfono:</td>
    <td class='value'>$telefono</td>
  </tr>
  <tr>
    <td class='label'>Tipo de usuario</td>
    <td class='value'>$tipo</td>
  </tr>
</table>

<p class='section-title'>📝 Biografía</p>


<div class='footer'>
  Documento generado automáticamente el $fecha_hoy
</div>

</body>
</html>
";
exit;
?>
