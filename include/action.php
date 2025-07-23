<?php
session_start();
include 'conection.php';
error_reporting(0);
//  accion de recuperar usuario y password 
if(isset($_POST['btnRecPass'])){
    $RecUserPass = $Conection->real_escape_string($_POST['NombreUserPass']);
    $RecEmailPass = $Conection->real_escape_string($_POST['EmailUser']);
    
    // consulta para extraer datos si existe el usuario para recuperar el password
    $BuscarUser = "SELECT * FROM Usuarios WHERE EmailUser = '$RecEmailPass' AND UserName = '$RecUserPass'";
    $eBuscarUser = $Conection->query($BuscarUser);
    $ResultadoBuser = $eBuscarUser->fetch_array();
    $IdUserB = $ResultadoBuser['Id_Usuarios'];
    $IdUserEmailB = $ResultadoBuser['EmailUser'];
    if($ResultadoBuser  > 0){
        $AlertRecuperar.="<div class='alert alert-success alert-dismissible fade show shadow' role='alert' style='background-color:rgba(32, 160, 19,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong class='text-white'> Exelente datos encontrados</strong> <span class='text-white'> Actualiza tu password.<a href='RecPass2?id=$IdUserB&Email=$IdUserEmailB' class='text-white text-decoration-none'>&nbsp;Click Aqui</span>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>"; 

    } 
    else{
        $AlertRecuperar.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(160, 19, 90,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong class='text-white'> No se encontraron datos. </strong> <span class='text-white'> Verifica o contacta a soporte.</span>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
    }
}

// accion para actualizar los datos del perfil de usuario que ingresa al sistema 
if (isset($_POST['btnAupdateUser'])) {
    $Id_UpdateUser = $Conection->real_escape_string($_POST['idUpdate']);
    $NombreUser = $Conection->real_escape_string($_POST['NombreUser']);
    $ApellidoPUser = $Conection->real_escape_string($_POST['ApellidoP']);
    $ApellidoMUser  = $Conection->real_escape_string($_POST['ApellidoM']);
    $TelefonoUser = $Conection->real_escape_string($_POST['TelefonoUser']);
    $EmailUser = $Conection->real_escape_string($_POST['EmailUser']);
    $FechNacUser = $Conection->real_escape_string($_POST['FechaNacr']);
    $UserNick = $Conection->real_escape_string($_POST['NickUpdate']);
    $EmailActual = $UserOnline['EmailUser']; 
    $NickActual = $UserOnline['UserName']; 
    $errores = [];
    // Validación de campos vacíos
    $campos = [
        'NombreUser'   => 'Nombre',
        'ApellidoP'    => 'Apellido Paterno',
        'ApellidoM'    => 'Apellido Materno',
        'TelefonoUser' => 'Teléfono',
        'EmailUser'    => 'Email',
        'FechaNacr'    => 'Fecha de Nacimiento',
        'NickUpdate'   => 'Nombre de Usuario (Nick)'
    ];

    foreach ($campos as $key => $label) {
        if (empty(trim($_POST[$key]))) {
            $errores[] = "El campo <strong>$label</strong> no puede estar vacío. Por favor ingréselo.";
        }
    }
    // mostrar los errores si existen 
    if (!empty($errores)) {
        $AlertaError.= '<div class="container mt-3">';
        foreach ($errores as $error) {
            $AlertaError.= '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                ' . $error . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>';
        }
        $AlertaError.= '</div>';
    }
    else {
        // Aquí puedes continuar con el proceso de actualización en la base de datos
        // validar que la fecha de nacimiento no sea menor de edad 
    if (!empty($FechNacUser)) {
        $fechaHoy = new DateTime();
        $fechaNacimiento = new DateTime($FechNacUser);
        $edad = $fechaHoy->diff($fechaNacimiento)->y;
        if ($edad < 18) {
            $AlertaError.='<div class="alert alert-danger text-white alert-dismissible fade show shadow" role="alert" style="background-color:rgba(160, 19, 90,0.8);">
                                <strong class="text-white"> No puedes actualizar los datos</strong> <span class="text-white"> La fecha indiaca que eres menor de edad, Por favor verifica tus datos.</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> ';
            return;                
        }
    } 
    // verificar si el email existente cambia 
    if($EmailUser !== $EmailActual){
    // validar si el email selccionado ya existe en la base de datos 
    $ValidaEmail = "SELECT EmailUser FROM Usuarios WHERE EmailUser = '$EmailUser'";
    $ValidandoEmail = $Conection->query($ValidaEmail);
    if ($ValidandoEmail > 0) {
            $AlertaError.='<div class="alert alert-danger text-white alert-dismissible fade show shadow" role="alert" style="background-color:rgba(160, 19, 90,0.8);">
                                <strong class="text-white"> No puedes actualizar los datos</strong> <span class="text-white"> El email ya se encuentra registrado en la base de datos, Por favor verifica con otro.</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> ';
            return;                
        }
    }
    // verificar si el userNick cambia 
    if($UserNick != $NickActual){
    // validar si el UserNick existe en la base de datos 
    $ValidaNick = "SELECT UserName FROM Usuarios WHERE UserName = '$UserNick'";
    $ValidandoNick = $Conection->query($ValidaNick);
    if ($ValidandoNick > 0) {
            $AlertaError.='<div class="alert alert-danger text-white alert-dismissible fade show shadow" role="alert" style="background-color:rgba(160, 19, 90,0.8);">
                                <strong class="text-white"> No puedes actualizar los datos</strong> <span class="text-white"> El UserNick ya se encuentra registrado en la base de datos, Por favor verifica con otro.</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> ';
            return;                
        }
    }
    // actualizar los datos del usuario desde el perfil 
    $UpdateUserfull = "UPDATE Usuarios SET NombreUser = '$NombreUser', ApellidoP = '$ApellidoPUser', ApellidoM = '$ApellidoMUser', TelefonoUser = '$TelefonoUser', 
    EmailUser = '$EmailUser', UserName = '$UserNick', FechNacUser = '$FechNacUser' WHERE Id_Usuarios = '$Id_UpdateUser'";
    $EjUpdateUserfull = $Conection->query($UpdateUserfull);
    if($EjUpdateUserfull > 0){
        $AlertaOk.='<div class="alert alert-success text-white alert-dismissible fade show shadow" role="alert" style="background-color:rgba(76, 182, 34, 0.8);">
                                <strong class="text-white"> Datos Actualizados</strong> <span class="text-white"> Tus daatos se actualizaron correctamente en breve se actualizaran ...</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> ';
                            header("Refresh:4; url=perfil");
    }
    else{
        $AlertaError.='<div class="alert alert-danger text-white alert-dismissible fade show shadow" role="alert" style="background-color:rgba(160, 19, 90,0.8);">
                                <strong class="text-white"> No se pueden actualizar los datos</strong> <span class="text-white"> Existe un error en el proceso, Por favor intenta mas tarde.</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> ';
            return; 
    }
}

}

// recuperacion de password
if(isset($_POST['btnUpdatePass'])){
$IdPassUpdate = $Conection->real_escape_string($_POST['idUserPass']);
$PassModificado = $Conection->real_escape_string($_POST['passnew']);
// realizar la consulta para verificar que el password exista 

}
?>