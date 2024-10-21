<?php
include 'include/conection.php';
error_reporting(0);
$idMUser = $Conection->real_escape_string($_POST['idUser']);
$EmailMUser = $Conection->real_escape_string($_POST['IdEmail']);
$NewPass = $Conection->real_escape_string($_POST['NewPasswordUser']);
$NewPass2 = $Conection->real_escape_string($_POST['NewPass2']);
$NewPasswordUser = md5($NewPass);  
// consulta para verificar que los password coinsidan 
if($NewPass != $NewPass2){
    $AlerResultado.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert' style='background-color:rgba(160, 19, 90,0.8);'>
                                <svg class='bi text-white' width='20' height='20' role='img' aria-label='Tools'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong class='text-white'> Verifica tu password. </strong> <span class='text-white'> No coinciden y lo puedes olvidar.</span>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                        $previous_url = $_SERVER['HTTP_REFERER'];  // Obtiene la URL de la página anterior
                        header("Refresh: 7; url=$previous_url");
}
else{
    // consulta para actualizar el nuevo password del usuario
    $UpdateUserM = "UPDATE Usuarios SET PasswordUser = '$NewPasswordUser' WHERE Id_Usuarios = '$idMUser'";
    $eUpdateUserM = $Conection->query($UpdateUserM);
    if ($Conection->affected_rows > 0) {
        $AlerResultado = "<div class='container'>
                            <div class='card shadow'>
                                <div class='row mt-4 text-center'>
                                    <h2 class='text-center fs-5 text-success'>Recuperación exitosa</h2>
                                </div>
                                <div class='row mt-2 mb-2 text-center'>
                                    <h3 class='fs-6'>Tu solicitud de recuperación de cuenta y password fue exitosa.</h3>
                                    <p>Tu nuevo password es: <strong>$NewPass</strong> y se ha enviado al email registrado: <strong>$EmailMUser</strong>.</p>
                                </div>
                                <div class='row mt-2 mb-3 text-center'>
                                    <span>Por favor ingresa a MindCare con tu usuario y tu nuevo password <a href='index' class='text-decoration-none text-danger'> Inicia Sesion</a></span>
                                </div>
                            </div>
                        </div>";
    } else {
        $AlerResultado = "<div class='container'>
                            <div class='alert alert-danger' role='alert'>
                                <h4 class='alert-heading'>Error en la recuperación</h4>
                                <p>No se pudo procesar la solicitud. Por favor, intenta de nuevo.</p>
                            </div>
                        </div>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pace.css">
    <script src="js/jquery.js"></script>
    <title>Resultado de recuperacion de Cuenta | MindCare</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-sm-10 col-md-8 col-lg-8 mt-3">
                <div class="row mt-3">
                    <h1 class="display-6 fs-5 text-center">En proceso tu solicitud <span class="text-primary"> MindCare</span></h1>
                </div>
            </div>
        </div>
        <div class="row mt-2 mb-2 text-center justify-content-center">
            <div class="col-ms-10 cool-md-10 col-lg-10">
                <?php echo $AlerResultado; ?>
            </div>
        </div>
    </div>
</body>

</html>