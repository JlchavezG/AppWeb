<?php 
error_reporting(0);
session_start();
include 'conection.php';

if (isset($_POST['BtnIngresar'])) {
    $usuario = $Conection->real_escape_string($_POST['UserName']);
    $Password = $Conection->real_escape_string(md5($_POST['UserPass']));

    // Inicializar intentos fallidos si no existe
    if (!isset($_SESSION['intentos'])) {
        $_SESSION['intentos'] = 0;
    }

    // Verificar si el usuario ya está bloqueado
    $checkUser = "SELECT * FROM Usuarios WHERE UserName = '$usuario'";
    $checkResult = $Conection->query($checkUser);
    $userData = $checkResult->fetch_array();

    if ($userData && $userData['EstatusUser'] == 0) {
        $alerta .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(160, 19, 90,0.8);'>
                        <svg class='bi text-white' width='20' height='20' role='img' aria-label='Blocked'>
                        <use xlink:href='library/icons/bootstrap-icons.svg#lock-fill'/>
                        </svg>
                        <strong class='text-white'> Cuenta bloqueada</strong> <span class='text-white'>Contacta a soporte.</span>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    } else {
        $Login = "SELECT * FROM Usuarios WHERE UserName = '$usuario' and PasswordUser = '$Password' and EstatusUser = '1'";
        if ($Resultado = $Conection->query($Login)) {
            while ($row = $Resultado->fetch_array()) {
                $userok = $row['UserName'];
                $passwordok = $row['PasswordUser'];
                $IdPersonal = $row['Id_Usuarios'];
            }
        }

        if (isset($usuario) && isset($Password)) {
            if ($usuario == $userok && $Password == $passwordok) {
                $_SESSION['loguin'] = TRUE;
                $_SESSION['Usuario'] = $usuario;
                $_SESSION['intentos'] = 0; // Reiniciar contador al iniciar sesión correctamente

                $Online = "UPDATE Usuarios SET OnlineEstatus = 1 WHERE Id_Usuarios = '$IdPersonal'";
                $VOnline = $Conection->query($Online);
                $registrarAcceso = "INSERT INTO HistorialAccesos (id_usuario, tipo_acceso) VALUES ('$IdPersonal', 'login')";
                $Conection->query($registrarAcceso);

                header("location:appweb");
                exit;
            } else {
                $_SESSION['intentos']++;
                if (!empty($IdPersonal)) {
                    $registrarFallido = "INSERT INTO HistorialAccesos (id_usuario, tipo_acceso) VALUES ('$IdPersonal', 'fallido')";
                    $Conection->query($registrarFallido);
            }

                if ($_SESSION['intentos'] >= 3) {
                    // Bloquear cuenta
                    $Bloquear = "UPDATE Usuarios SET EstatusUser = 0 WHERE Id_Usuarios = '$IdPersonal'";
                    $Conection->query($Bloquear);

                    $alerta .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(160, 19, 90,0.8);'>
                                    <svg class='bi text-white' width='20' height='20' role='img' aria-label='Lock'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#lock-fill'/>
                                    </svg>
                                    <strong class='text-white'> Cuenta bloqueada</strong> <span class='text-white'>Se alcanzaron 3 intentos fallidos. Contacta a soporte.</span>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";
                } else {
                    $intentosRestantes = 3 - $_SESSION['intentos'];
                    $alerta .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(160, 19, 90,0.8);'>
                                    <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                    </svg>
                                    <strong class='text-white'> Usuario y/o password inválido</strong> <span class='text-white'>Te quedan $intentosRestantes intento(s).</span>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";
                }
            }
        } else {
            header("location:index");
            exit;
        }
    }

    $Resultado->close();
    $Conection->close();
}
?>