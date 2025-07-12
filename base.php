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
    <title>Perfol de usuario | Venko</title>
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
        <?php include 'modulo/BusquedaNav.php';?>
    <!-- Termina navbar de busqueda -->
    <!-- contenido -->

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