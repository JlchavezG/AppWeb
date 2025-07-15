<?php 
//  Verificar si existe la carpeta img/qrs/, si no, crearla
$dir = 'img/qrs/';
if (!file_exists($dir)) {
    mkdir($dir, 0777, true); // Crear con permisos recursivos
}

$Nombre = $UserOnline['NombreUser'];
$ApellidoP = $UserOnline['ApellidoP'];
$ApellidoM = $UserOnline['ApellidoM'];
$Telefono = $UserOnline['TelefonoUser'];
$Email = $UserOnline['EmailUser'];
$Tipo = $UserOnline['NomTuser'];

// Construir el contenido vCard para el QR
$contenido_qr = "BEGIN:VCARD\n";
$contenido_qr .= "VERSION:3.0\n";
$contenido_qr .= "N:$Nombre;$ApellidoP;$ApellidoM;;\n"; // Apellido;Nombre;Segundo apellido
$contenido_qr .= "FN:$Nombre $ApellidoP $ApellidoM\n";
$contenido_qr .= "TEL;TYPE=CELL:$Telefono\n";
$contenido_qr .= "EMAIL:$Email\n";
$contenido_qr .= "NOTE:Tipo de Usuario: $Tipo\n";
$contenido_qr .= "END:VCARD";

$contenido_qr = mb_convert_encoding($contenido_qr, 'UTF-8');
// Ruta y nombre del archivo QR
$archivo_qr = $dir . "usuario_" . $Id . ".png";
// Muestra el contenido del QR en pantalla  echo nl2br(htmlentities($contenido_qr)); 
if (file_exists($archivo_qr)) {
    unlink($archivo_qr); // Borra la imagen previa
}
QRcode::png($contenido_qr, $archivo_qr, QR_ECLEVEL_H, 6, 2);
?>  