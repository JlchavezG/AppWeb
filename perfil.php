<?php
session_start();
include_once('include/conection.php');
include_once('include/querys.php');
include_once('include/confing.php');

$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
    header("location:index");
}
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
    <title>Perfil de usuario | Venko</title>
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
        <!-- contenido -->
        <div class="row mt-2 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card perfil-card shadow dashboard-card  d-flex flex-row align-items-center p-3">
                    <!-- Contenido izquierdo: nombre e info -->
                    <div class="card-body text-start">
                        <h5 class="perfil-nombre"><?php echo $UserOnline['NombreUser'];?></h5>
                        <p class="card-text text-muted"><?php echo $UserOnline['NomTuser']; ?> | <?php echo $UserOnline['EmailUser']; ?></p>
                    </div>
                    <!-- Foto de perfil a la derecha -->
                    <div class="perfil-foto-container ms-auto">
                        <img src="img/<?php echo $UserOnline['ImgUser'];?>" width="100px" alt="Foto de perfil" class="perfil-foto" />
                        <div class="cambiar-foto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-2">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card perfil-card shadow dashboard-card  d-flex flex-row align-items-center p-3">
                    <div class="card-body text-start">
                        <h5 class="perfil-nombre">Acerca de</h5>
                        <p class="card-text text-muted">
                            <strong>
                                <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#person-circle" />
                                </svg>&nbsp; Nombre Completo: 
                            </strong> <?php echo $UserOnline['NombreUser']." ".$UserOnline['ApellidoP']." ".$UserOnline['ApellidoM']; ?>
                        </p>
                        <p class="card-text text-muted mt-2">
                            <strong>
                                <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#suitcase-lg-fill" />
                                </svg>&nbsp; Rol :  
                            </strong> <?php echo $UserOnline['NomTuser']; ?>
                        
                        <hr class="dropdown-divider">
                        <p class="fw-lighter">Contacto</p>
                        <p class="card-text text-muted mt-2">
                            <strong>
                                <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#phone-vibrate-fill" />
                                </svg>&nbsp; Telefono : 
                            </strong> <?php echo $UserOnline['TelefonoUser']; ?>
                        </p>
                        <p class="card-text text-muted mt-2">
                            <strong>
                                <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#envelope-paper-fill" />
                                </svg>&nbsp; Email : 
                            </strong> <?php echo $UserOnline['EmailUser']; ?>
                        </p>
                        <p class="card-text text-muted mt-2">
                            <strong>
                                <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#calendar-week-fill" />
                                </svg>&nbsp; Fecha Registro : 
                            </strong> <?php echo $UserOnline['FechReg']; ?>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row mt-1">
                    <div class="card perfil-card shadow dashboard-card  d-flex flex-row align-items-center p-3">
                    <div class="card-body text-start">
                        <p class="fw-lighter"><strong>Rol: </strong></p>
                        <p class="card-text text-muted">
                            <?php echo $UserOnline['DescTuser']; ?>
                        </p>
                    </div>
                </div>
                </div>
                <div class="row mt-3">
                    <div class="card perfil-card shadow dashboard-card  d-flex flex-row align-items-center p-3">
                    <div class="card-body text-start">
                        <p class="fw-lighter"><strong>Acciones</strong></p>
                        <div class="row mt-1">
                            <div class="col mt-1">
                                <a href="include/generar-perfil-word.php" class="text-decoration-none">
                                <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#cloud-download-fill" />
                                </svg>&nbsp; Descargar
                                </a>
                            </div>
                            <div class="col mt-1">
                                <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#qr-code-scan" />
                                </svg>&nbsp; Generar
                            </div>
                            <div class="col mt-1">
                                <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#pencil-square" />
                                </svg>&nbsp; Editar perfil
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- termina el contenido -->
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