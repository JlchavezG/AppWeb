<?php
session_start();
include_once('include/conection.php');
include_once('include/querys.php');
include_once('include/confing.php');
include_once('include/action.php');

$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
    header("location:index");
}


$Id_Update = $_GET['Id_User'];
// consulta para modificar  perfil que ingresa 
$usuario = $Conection->real_escape_string($_SESSION['Usuario']);
// consulta para extraer todos los datos del usuario que ingresa al sistema con inner join 
$UpdateUser = "SELECT U.Id_Usuarios, U.NombreUser, U.ApellidoP, U.ApellidoM, U.TelefonoUser, U.EmailUser, U.Tusuario, U.UserName, 
    U.FechReg, U.FechNacUser, U.Id_Genero, U.ImgUser, U.EstatusUser, U.OnlineEstatus, TU.Id_Tusuario, TU.NomTuser, TU.DescTuser, G.Id_Genero, G.NomGenero  
    FROM Usuarios U INNER JOIN TipoUsuario TU ON U.Tusuario = TU.Id_Tusuario INNER JOIN 
    Genero G ON U.Id_Genero = G.Id_Genero WHERE U.Id_Usuarios = '$Id_Update'";
$UpdateUserNew = $Conection->query($UpdateUser);
$UserOnUpdate = $UpdateUserNew->fetch_array();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pace.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/dark.css">
    <link rel="stylesheet" href="css/Config.css">
    <link rel="icon" href="img/New_Logo_Gris_2023.png" type="image/png">
    <script src="js/jquery.js"></script>
    <title>Modificar Perfil de Usuario | Venko</title>
</head>

<body>
    <!-- navbar principal  -->
    <?php include 'modulo/Navbar.php'; ?>
    <!-- termina navbar -->
    <?php include 'modulo/MCSesion.php'; ?>
    <!-- inicia menu -->
    <?php include 'modulo/MenuSistem.php'; ?>
    <!-- termina menu -->
    <!-- inicia escritorio -->
    <div class="container mt-3">
        <!-- navbar de busqueda -->
        <?php include 'modulo/BusquedaNav.php'; ?>
        <!-- Termina navbar de busqueda -->
        <!-- contenido Formulario para obtener informacion del perfil -->
        <div class="row mt-3 justify-content-center">
            <div class="row mt-2 mb-2 text-center">
                <?php echo $AlertaError;?>
            </div>
            <h2 class="text-center">Modificar datos de<span class="text-primary"> Usuario</span></h2>
            <div class="row mt-2 text-end">
                <div class="col">
                    <a href="perfil" class="text-decoration-none">
                    regresar 
                    <svg class="bi me-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-left-circle" />
                    </svg></a>&nbsp;
                    <svg class="bi me-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#question-circle" />
                    </svg>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-10 col-md-10 col-lg-10 text-star">
                    <span>Tipo de Usuario: </span><?php echo $UserOnUpdate['NomTuser']; ?>
                </div>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post">
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <input type="hidden" name="idUpdate" value="<?php echo $UserOnUpdate['Id_Usuarios'];?>">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nombre</span>
                            <input type="text" class="form-control" name="NombreUser" placeholder="Nombre" aria-label="Nombre"
                                aria-describedby="basic-addon1" value="<?php echo $UserOnUpdate['NombreUser']; ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Apellido Paterno</span>
                            <input type="text" class="form-control" name="ApellidoP" placeholder="Apellido Paterno" aria-label="ApellidoP"
                                aria-describedby="basic-addon1" value="<?php echo $UserOnUpdate['ApellidoP']; ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Apellido Materno</span>
                            <input type="text" class="form-control" name="ApellidoM" placeholder="Apellido Materno" aria-label="ApellidoM"
                                aria-describedby="basic-addon1" value="<?php echo $UserOnUpdate['ApellidoM']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Telefono</span>
                            <input type="tel" class="form-control" name="TelefonoUser" placeholder="55-55-55-55-55" aria-label="Telefono"
                                aria-describedby="basic-addon1" value="<?php echo $UserOnUpdate['TelefonoUser']; ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                            <input type="tel" class="form-control" name="EmailUser" placeholder="ejemplo@dominio.com" aria-label="Email"
                                aria-describedby="basic-addon1" value="<?php echo $UserOnUpdate['EmailUser']; ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
                            <input type="date" class="form-control" name="FechaNacr" placeholder="ejemplo@dominio.com" aria-label="Fecha Nacimiento"
                                aria-describedby="basic-addon1" value="<?php echo $UserOnUpdate['FechNacUser']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-end">
                        <button type="submit"  class="btn  btn-outline-primary" name="btnAupdateUser">Actualizar datos de usuario</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Botón flotante para modo oscuro -->
    <button id="boton-modo" aria-label="Cambiar modo" title="Cambiar modo">
        🌙
    </button>
    <!-- T  ermina escritorio-->
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dark.js"></script>
</body>

</html>