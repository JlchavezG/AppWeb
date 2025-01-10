<?php

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
    <?php include 'modulo/MenuSistem.php';?>
    <!-- termina menu -->
    <!-- inicia escritorio -->
    <div class="container">
        <div class="row mt-5 mb-2 justify-content-center">
            <div class="card shadow bg-primary text-white">
                <div class="row mt-2 mb-2">
                    <h3 class="fs-5 text-center">Información del usuario</h3>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="container">
                            <div class="row mt-1 mb-1">
                                <div class="col text-center">
                                    <svg class="bi" width="20" height="20" fill="currentColor">
                                        <use xlink:href="library/bicons/bootstrap-icons.svg#person-badge-fill" />
                                    </svg>
                                    &nbsp;
                                    <span class="fs-6 fw-lighter">Nombre de usuario</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="row mt-1 mb-1">
                            <div class="col text-center">
                                <span class="fs-6 fw-lighter">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#person-exclamation" />
                                </svg>
                                &nbsp;Tipo de usuario:</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider mt-1 bg-white"></div>
                <div class="row mt-2 text-center">
                    <div class="col-sm-12 col-md-4 col-lg-4 mt-2 mb-2">
                        <span class="fs-6 fw-lighter">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#telephone-fill" />
                            </svg>
                            &nbsp;Telefono de contacto:
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 mt-2 mb-2">
                        <span class="fs-6 fw-lighter">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#envelope-at-fill" />
                            </svg>
                            &nbsp;Email de contacto:
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 mt-2 mb-2">
                        <span class="fs-6 fw-lighter">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#calendar-check" />
                            </svg>
                            &nbsp;Fecha de Registro:
                        </span>
                    </div>
                </div>
                <div class="dropdown-divider mt-1 bg-white"></div>
                <div class="row mt-1 mb-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-end">
                        <a href="#" class="text-white text-decoration-none">
                        <span class="fs-6 fw-lighter">
                            <svg class="bi" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#pencil-fill" />
                            </svg>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3 justify-content-center">
            <div class="col-sm-12 col-md-4 col-lg-4 mt-1 mb-1 py-2 text-center">
                <div class="card shadow-md bg-primary text-white">1</div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mt-1 mb-1 py-2 text-center">2</div>
            <div class="col-sm-12 col-md-4 col-lg-4 mt-1 mb-1 py-2 text-center">3</div>
        </div>
    </div>
    
    <!-- T  ermina escritorio-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
</body>

</html>