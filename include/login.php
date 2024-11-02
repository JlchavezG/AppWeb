<?php 
error_reporting(0);
session_start();
if (isset($_POST['BtnIngresar'])) {
    $usuario = $Conection->real_escape_string($_POST['UserName']);
    $Password = $Conection->real_escape_string(md5($_POST['UserPass']));
    $Login = "SELECT * FROM Usuarios WHERE UserNick = '$usuario' and PasswordUser = '$Password' and EstatusUser = '1'";
    if ($Resultado = $Conection->query($Login)) {
        while ($row = $Resultado->fetch_array()) {
            $userok = $row['UserNick'];
            $passwordok = $row['PasswordUser'];
            $IdPersonal = $row['Id_Usuarios'];
        }
        $Resultado->close();
    }
    
    if (isset($usuario) && isset($Password)) {
        if ($usuario == $userok && $Password == $passwordok) {
            $_SESSION['loguin'] = TRUE;
            $_SESSION['Usuario'] = $usuario;
            // consulta para modificar el estado de online 
            $Online = "UPDATE Usuarios SET OnlineEstatus = 1 WHERE Id_Usuarios = '$IdPersonal'";
            $VOnline = $Conection->query($Online);
            header("location:appweb");

            
        } else {
            $alerta .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(160, 19, 90,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong class='text-white'> Usuario y/o password invalido</strong> <span class='text-white'>Por favor contacta a soporte.</span>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        }
    } else {
        header("location:index");
    }
    $Conection->close();
}


?>