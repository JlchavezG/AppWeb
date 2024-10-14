<?php 
    include 'conection.php';
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
        if($Genero == '1'){
            $imgUser = "AvatarH.png";
        }
        elseif($Genero == '2'){
            $imgUser = "AvatarM.png";
        }
        // verificar si existe un email registrado 
        $VEmail = "SELECT * FROM Usuarios WHERE EmailUser = '$EmailUser'";
        $EVEmail = $Conection->query($VEmail);   
        if($EVEmail > 0){
            $AlertReg.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(13,204,207,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong> El email ya se encuentra registrado</strong> Por favor verifica o cambia el email para el registro.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        }
        else{
            
        }
    }

?>