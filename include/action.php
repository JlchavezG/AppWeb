<?php 
    include 'conection.php';
    error_reporting(0);
    // insertar nuevo usuarios 
    if(isset($_POST['btnRegistrar'])){
        $NomUser = $Conection->real_escape_string($_POST['Nombre']);
        $Apaterno = $Conection->real_escape_string($_POST['Apaterno']);
        $Amaterno = $Conection->real_escape_string($_POST['Amaterno']);
        $TelefonoUser = $Conection->real_escape_string($_POST['TelefonoUser']);
        $EmailUser = $Conection->real_escape_string($_POST['EmailUse']);
        $TipoUser = $Conection->real_escape_string($_POST['Tusuario']);
        $UserNick = $Conection->real_escape_string($_POST['userNick']);
        $PassUser = $Conection->real_escape_string(md5($_POST['passUser']));
        $FechaReg = date('Y-m-d'); 
        $Genero = $Conection->real_escape_string($_POST['UserGenero']);
        $StatusUser = 1;
        $Online = 0;
        $Segundos = 5;
        switch($Genero) {
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
        
        // registrar el usuario en la base de datos 
        $RegNewUser = "INSERT INTO Usuarios(NombreUser,ApellidoP,ApellidoM,TelefonoUser,EmailUser,Tusuario,UserNick,
        PasswordUser,FechReg,Id_Genero,ImgUser,EstatusUser,OnlineEstatus)VALUES('$NomUser','$Apaterno','$Amaterno','$TelefonoUser',
        '$EmailUser','$TipoUser','$UserNick','$PassUser','$FechaReg','$Genero','$imgUser','$StatusUser','$Online')";
        $ERNewUser = $Conection->query($RegNewUser);
        if($ERNewUser > 0){
            $AlertReg .="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(13,204,207,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong> El Usuario se registro exitosamente</strong> Por favor Inicia sesion con tu cuenta.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                        header("Refresh:3; url=index");
        }
        
        
    }      
?>