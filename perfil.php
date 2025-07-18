<?php
session_start();
include_once('include/conection.php');
include_once('include/querys.php');
include_once('include/confing.php');
include_once('include/action.php');
include_once('library/phpqrcode/qrlib.php');
include_once('include/generaQr.php');

$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
    header("location:index");
}
if (!isset($_GET['id_user'])) {
    header("Location:appweb");
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <div class="container">
            <div class="row mt-3 mb-3 text-center">
                <?php echo $AlertaError; ?>
                <?php echo $AlertaOk; ?>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-12">
                    <div class="card perfil-card shadow dashboard-card d-flex flex-wrap align-items-center p-3">
                        <!-- Contenido izquierdo -->
                        <div class="card-body text-center flex-grow-1">
                            <h5 class="perfil-nombre"><?php echo $saludo . " " . $UserOnline['NombreUser']; ?></h5>
                            <p class="card-text text-muted text-break">
                                <?php echo $UserOnline['NomTuser']; ?> |
                                <?php echo $UserOnline['EmailUser']; ?>
                            </p>
                        </div>
                        <!-- Imagen de perfil -->
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <form id="form-subir-foto" method="post" enctype="multipart/form-data">
                                <input type="file" id="file-foto" name="nuevaFoto" accept=".jpg, .jpeg, .png"
                                    style="display: none;" onchange="previewImagen(event)">

                                <div class="perfil-container" onclick="document.getElementById('file-foto').click();">
                                    <img id="img-preview" src="img/user/<?php echo $UserOnline['ImgUser']; ?>"
                                        alt="Imagen de perfil" class="imagen-perfil img-fluid rounded-circle shadow">
                                    <div class="hover-text">Cambiar foto</div>
                                </div>

                                <div id="progress-container" class="w-100 mt-2" style="display: none;">
                                    <div class="progress">
                                        <div id="progress-bar" class="progress-bar bg-success" style="width: 0%;">0%
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="row mt-3 mb-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-end">
                        <a href="EdirPerfilUser?Id_User=<?php echo $UserOnline['Id_Usuarios']; ?>"
                            class="text-decoration-none btn btn-outline-primary">
                            Editar Password
                        </a> &nbsp;&nbsp;
                        <a href="#" data-bs-toggle="modal" data-bs-target="#UpdateUserModal"
                            class="text-decoration-none btn btn-outline-primary">
                            Editar Perfil
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-3 mb-2">
                <!-- Columna izquierda -->
                <div class="col-12 col-md-6 mb-3">
                    <div class="card perfil-card shadow dashboard-card p-3 h-100">
                        <div class="card-body text-start">
                            <h5 class="perfil-nombre">Acerca de</h5>
                            <p class="card-text text-muted">
                                <strong>
                                    <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                        <use xlink:href="library/bicons/bootstrap-icons.svg#person-circle" />
                                    </svg>&nbsp; Nombre Completo:
                                </strong>
                                <?php echo $UserOnline['NombreUser'] . " " . $UserOnline['ApellidoP'] . " " . $UserOnline['ApellidoM']; ?>
                            </p>
                            <p class="card-text text-muted mt-2">
                                <strong>
                                    <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                        <use xlink:href="library/bicons/bootstrap-icons.svg#suitcase-lg-fill" />
                                    </svg>&nbsp; Rol:
                                </strong> <?php echo $UserOnline['NomTuser']; ?>
                            </p>
                            <p class="card-text text-muted mt-2">
                                <strong>
                                    <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                        <use xlink:href="library/bicons/bootstrap-icons.svg#key-fill" />
                                    </svg>&nbsp; User Nick:
                                </strong>
                                <?php echo $UserOnline['UserName']; ?>
                            </p>
                            <p class="card-text text-muted mt-2">
                                <strong>
                                    <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                        <use xlink:href="library/bicons/bootstrap-icons.svg#calendar2-week-fill" />
                                    </svg>&nbsp; Fecha Nacimiento:
                                </strong>
                                <?php echo $UserOnline['FechNacUser']; ?>
                            </p>
                            <hr class="dropdown-divider">
                            <p class="fw-lighter">Contacto</p>
                            <p class="card-text text-muted mt-2">
                                <strong>
                                    <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                        <use xlink:href="library/bicons/bootstrap-icons.svg#phone-vibrate-fill" />
                                    </svg>&nbsp; Teléfono:
                                </strong> <?php echo $UserOnline['TelefonoUser']; ?>
                            </p>
                            <p class="card-text text-muted mt-2">
                                <strong>
                                    <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                        <use xlink:href="library/bicons/bootstrap-icons.svg#envelope-paper-fill" />
                                    </svg>&nbsp; Email:
                                </strong> <?php echo $UserOnline['EmailUser']; ?>
                            </p>
                            <p class="card-text text-muted mt-2">
                                <strong>
                                    <svg class="bi me-1" width="20" height="20" fill="currentColor">
                                        <use xlink:href="library/bicons/bootstrap-icons.svg#calendar-week-fill" />
                                    </svg>&nbsp; Fecha Registro:
                                </strong> <?php echo $UserOnline['FechReg']; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Columna derecha -->
                <div class="col-12 col-md-6">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="card perfil-card shadow dashboard-card p-3 h-100">
                                <div class="card-body text-start">
                                    <p class="fw-lighter"><strong>Rol:</strong></p>
                                    <p class="card-text text-muted">
                                        <?php echo $UserOnline['DescTuser']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-1">
                            <div class="card perfil-card shadow dashboard-card  h-100 py-2">
                                <div class="card-body text-center mt-2">
                                    <p class="fw-lighter"><strong>Descarga perfil:</strong></p>
                                    <a href="include/generar-perfil-word.php?id_Usuario=<?php echo $UserOnline['Id_Usuarios']; ?>"
                                        class="text-decoration-none d-block mt-2">
                                        <svg class="bi me-1" width="30" height="30" fill="currentColor">
                                            <use xlink:href="library/bicons/bootstrap-icons.svg#cloud-download-fill" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-1">
                            <div class="card perfil-card shadow dashboard-card  h-100 py-2">
                                <div class="card-body text-center mt-2">
                                    <p class="fw-lighter"><strong>Genera Codigo</strong></p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#QrUserModal"
                                        class="text-decoration-none d-block mt-2">
                                        <svg class="bi me-1" width="30" height="30" fill="currentColor">
                                            <use xlink:href="library/bicons/bootstrap-icons.svg#qr-code" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-2">
                            <div class="card perfil-card shadow dashboard-card  h-100 py-2">
                                <div class="card-body text-center mt-2">
                                    <p class="fw-lighter"><strong>Fecha</strong></p>
                                    <a href="#" class="text-decoration-none d-block mt-2">
                                        <svg class="bi me-1" width="30" height="30" fill="currentColor">
                                            <use xlink:href="library/bicons/bootstrap-icons.svg#calendar-fill" />
                                        </svg>
                                    </a>
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
    <?php include 'modulo/ModalQrPerfil.php'; ?>
    <?php include 'modulo/UpdateUserModal.php'; ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dark.js"></script>
</body>

</html>