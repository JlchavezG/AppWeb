<?php
session_start();
include 'include/confing.php';
include 'include/querys.php';
include 'include/conection.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pace.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Inicio de sistema | MindCare</title>
</head>

<body>
    <!-- navbar principal  -->
    <?php include 'modulo/Navbar.php'; ?>
    <!-- termina navbar -->
    <?php include 'modulo/MCSesion.php'; ?>
    <!-- inicia menu -->
    <div class="offcanvas offcanvas-end bg-primary text-white" tabindex="-1" id="MenuPrincipal"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset text-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush text-white">
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#house-fill" />
                        </svg>&nbsp;&nbsp; Inicio
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#house-fill" />
                        </svg>&nbsp;&nbsp; Perfil
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#person-circle" />
                        </svg>&nbsp;&nbsp; Usuarios
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#clipboard2-data-fill" />
                        </svg>&nbsp;&nbsp; Reportes
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#chat-left-dots-fill" />
                        </svg>&nbsp;&nbsp; Mensajes
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#calendar-check-fill" />
                        </svg>&nbsp;&nbsp; Agendar Citas
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#person-lines-fill" />
                        </svg>&nbsp;&nbsp; Test
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#bell-fill" />
                        </svg>&nbsp;&nbsp; Notificaciones
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#archive-fill" />
                        </svg>&nbsp;&nbsp; Expedientes
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#clock-history" />
                        </svg>&nbsp;&nbsp; Seguimientos
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#database-down" />
                        </svg>&nbsp;&nbsp; Respaldos
                    </a>
                </li>
                <li class="list-group-item bg-primary text-white">
                    <a href="#" class="text-white text-decoration-none">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#database-down" />
                        </svg>&nbsp;&nbsp; Respaldos
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- termina menu -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
</body>

</html>