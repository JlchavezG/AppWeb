<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pace.css">
    <title>Inicio de sistema | MindCare</title>
</head>

<body>
    <!-- navbar principal  -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MindCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Bienvenido:</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="btn btn-primary" href="#get-help">&nbsp;Agendar Cita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.js"></script>
</body>

</html>