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
    <script src="js/jquery.js"></script>
    <title>Inicio de sistema | MindCare</title>
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
        <div class="row mt-1">
            <!-- Card de busqueda:  -->
            <div class="col-md-12 mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="">
                                <div class="input-group mb-1">
                                    <button class="btn btn-outline-primary" type="button" id="button-addon1">
                                        <svg class="bi" width="20" height="20" fill="currentColor">
                                            <use xlink:href="library/bicons/bootstrap-icons.svg#search" />
                                        </svg>
                                    </button>
                                    <input type="text" class="form-control" placeholder="Busqueda"
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                            </form>
                        </div>
                        <div class="col text-end">
                            <!-- Dropdown Imagen de Perfil -->
                            <div class="dropdown text-end">
                                <span> Hola: <?php echo $UserOnline['NombreUser']; ?> &nbsp;</span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://i.pravatar.cc/40" alt="mdo" width="40" height="40"
                                        class="rounded-circle shadow-sm">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end text-small shadow"
                                    aria-labelledby="userDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <svg class="bi" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#person-fill" />
                                            </svg> Perfil
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <svg class="bi" width="20" height="20" fill="currentColor">
                                                <use
                                                    xlink:href="library/bicons/bootstrap-icons.svg#gear-wide-connected" />
                                            </svg> Configuración
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="#">
                                            <svg class="bi" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#power" />
                                            </svg> Cerrar sesión
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-1">
            <!-- Card 1:  -->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div
                    class="card shadow dashboard-card card-welcome d-flex flex-md-row align-items-center justify-content-between p-3">
                    <div>
                        <h5 class="fw-bold mb-1"><?php echo $saludo; ?>:
                            <?php echo $UserOnline['NombreUser'] . " " . $UserOnline['ApellidoP'] . " " . $UserOnline['ApellidoM']; ?>
                        </h5>
                        <p class="text-muted mb-1"><strong>Tu tipo de usuario es:</strong>
                            <?php echo $UserOnline['NomTuser']; ?> </p>
                        <p class="text-muted mb-1"><strong>Tu email:</strong> <?php echo $UserOnline['EmailUser']; ?>
                        </p>
                        <button class="mt-2 btn btn-outline-primary btn-sm">Ver Perfil</button>
                    </div>
                    <img src="img/Desarrollador.png" alt="Congrats" class="welcome-img d-none d-md-block img-fluid"
                        width="180px">
                </div>
            </div>

            <!-- Card 2:  -->
            <div class="col-md-3">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#person-add" />
                            </svg> Usuarios
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 3:  -->
            <div class="col-md-3">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#briefcase-fill"" />
                                </svg> Clientes
                            </h6>
                            <h4 class=" fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 4:  -->
            <div class="col-md-3">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#box2-fill" />
                            </svg> Productos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 5:  -->
            <div class="col-md-3">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Ventas
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 6:  -->
            <div class="col-md-6">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#truck" />
                            </svg> Entregas Pendientes
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 7:  -->
            <div class="col-md-6">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#truck-flatbed" />
                            </svg> Total de Entregas
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 8:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#inboxes-fill" />
                            </svg> Facturas
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 9:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 10:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 11:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 12:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 13:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

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