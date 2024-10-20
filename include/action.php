<?php
include 'conection.php';
error_reporting(0);

if (isset($_POST['btnRegistrar'])) {
    $NomUser = $Conection->real_escape_string($_POST['Nombre']);
    $Apaterno = $Conection->real_escape_string($_POST['Apaterno']);
    $Amaterno = $Conection->real_escape_string($_POST['Amaterno']);
    $TelefonoUser = $Conection->real_escape_string($_POST['TelefonoUser']);
    $EmailUser = $Conection->real_escape_string($_POST['EmailUser']);
    $TipoUser = $Conection->real_escape_string($_POST['Tusuario']);
    $UserNick = $Conection->real_escape_string($_POST['userNick']);
    $PassUser = $Conection->real_escape_string(md5($_POST['passUser']));
    $FechaReg = date('Y-m-d');
    $Genero = $Conection->real_escape_string($_POST['UserGenero']);
    $StatusUser = 1;
    $Online = 0;

    switch ($Genero) {
        case '1':
            $imgUser = "AvatarH.png";
            break;
        case '2':
            $imgUser = "AvatarM.png";
            break;
        default:
            $imgUser = "AvatarN.png";
            break;
    }

    // Verificar si el UserNick ya existe
    $VeriUser = "SELECT * FROM Usuarios WHERE UserNick = '$UserNick'";
    $EVeriUser = $Conection->query($VeriUser);

    // Verificar si el EmailUser ya existe
    $VEmail = "SELECT * FROM Usuarios WHERE EmailUser = '$EmailUser'";
    $EVEmailUser = $Conection->query($VEmail);

    // Si el nombre de usuario ya existe
    if ($EVeriUser->num_rows > 0) {
        $AlertReg .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(160, 19, 90,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong class='text-white'> El nombre de usuario ya existe </strong> <span class='text-white'>Por favor verificalo o contacta a soporte.</span>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
    }
    // Si el correo electrónico ya está registrado
    elseif ($EVEmailUser->num_rows > 0) {
        $AlertReg .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(160, 19, 90,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong class='text-white'> El correo electrónico ya está registrado </strong> <span class='text-white'>Por favor verificalo o contacta a soporte.</span>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
    } else {
        // Registrar el usuario en la base de datos
        $RegNewUser = "INSERT INTO Usuarios(NombreUser, ApellidoP, ApellidoM, TelefonoUser, EmailUser, Tusuario, UserNick, PasswordUser, FechReg, Id_Genero, ImgUser, EstatusUser, OnlineEstatus)
                        VALUES ('$NomUser', '$Apaterno', '$Amaterno', '$TelefonoUser', '$EmailUser', '$TipoUser', '$UserNick', '$PassUser', '$FechaReg', '$Genero', '$imgUser', '$StatusUser', '$Online')";

        if ($Conection->query($RegNewUser) === TRUE) {
            $AlertReg .= "<div class='alert alert-success alert-dismissible fade show shadow' role='alert' style='background-color:rgba(32, 160, 19,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong class='text-white'> El Usuario se registró exitosamente</strong> <span class='text-white'>Por favor Inicia sesión con tu cuenta.</span>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
            header("Refresh:3; url=index");
        } else {
            $AlertReg .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(160, 19, 90,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong class='text-white'> Error: No se pudo registrar el usuario. </strong> <span class='text-white'> Intenta más tarde.</span>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        }
    }
}
?>