<?php 
error_reporting(0);
session_start();
if (isset($_POST['BtnIngresar'])) {
    $UserNick = $Conection->real_escape_string($_POST['UserName']);
    $Password = $Conection->real_escape_string(md5($_POST['UserPass']));
    $Login = "SELECT * FROM Usuarios WHERE UserNick = '$UserNick' and PasswordUser = '$Password' and EstatusUser = '1'";
    if ($Resultado = $Conection->query($Login)) {
        while ($row = $Resultado->fetch_array()) {
            $userok = $row['UserNick'];
            $passwordok = $row['PasswordUser'];
            $IdPersonal = $row['Id_Usuarios'];
        }
        $Resultado->close();
    }
    $Conection->close();
    if (isset($UserNick) && isset($Password)) {
        if ($UserNick == $userok && $Password == $passwordok) {
            $_SESSION['loguin'] = TRUE;
            $_SESSION['Usuario'] = $UserNick;
            
            header("location:appweb");

            
        } else {
            $alerta .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(13,204,207,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong> Usuario y/o password invalido</strong> Por favor contacta a soporte.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        }
    } else {
        header("location:index");
    }
}


?>