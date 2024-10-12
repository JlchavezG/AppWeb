<?php 
    include 'include/conection.php';
    include 'include/login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pace.css">
    <script src="js/jquery.js"></script>
    <title>Inicio Iscjoseluischavezg</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <h1 class="text-center display-5 fs-3 text">Inicio de <span class="text-primary">sesion MindCare</span></h1>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-sm-12 col-md-10 col-lg-10 text-center">
                <img src="img/login.png" alt="login" class="img-fluid">
            </div>
        </div>
        <div class="row mt-2 justify-content-center">
            <div class="col-sm-12 col-md- col-lg-6">
                <?php echo $alerta;?>
            </div> 
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-10 text-center"></div>
            <div class="row mt-3 justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="needs-validation" novalidate>
                        <div class="row mt-2">
                            <input type="text" name="UserName" id="UserName" class="form-control" placeholder="Usuario"
                                required>
                            <div class="invalid-feedback">
                                Por favor ingresa tu nombre de usuario.
                            </div>
                        </div>
                        <div class="row mt-2">
                            <input type="password" name="UserPass" id="VerPassWord" class="form-control"
                                placeholder="Password" required>
                            <div class="invalid-feedback">
                                Por favor ingresa tu password.
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-6 col-md-6 col-lg-6"></div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-check form-switch">
                                    <input type="checkbox" id="VerPass" class="form-check-input" onclick="verPass(this);">
                                    <label for="VerPass" class="form-check-label">Visualizar Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <input type="submit" name="BtnIngresar" id="BtnIngresar" class="btn btn-sm btn-primary"
                                value="Ingresar">
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-sm-12 col-md-6 col-lg-6 text-center mt-2">
                                <div class="d-grid gap-2 mx-auto">
                                    <a href="RegUser" type="button" class="btn btn-outline-primary">
                                        <svg class="bi" width="18" height="18" fill="currentColor">
                                            <use xlink:href="library/bicons/bootstrap-icons.svg#plus-circle" />
                                        </svg>&nbsp;&nbsp; Crea una cuenta
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 text-center mt-2">
                                <div class="d-grid gap-2 mx-auto">
                                    <a href="RecPass" type="button" class="btn btn-outline-primary">
                                        <svg class="bi" width="18" height="18" fill="currentColor">
                                            <use xlink:href="library/bicons/bootstrap-icons.svg#key-fill" />
                                        </svg>&nbsp;&nbsp; Recupera tu cuenta</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer  - Bootstrap menu -->
    <?php include 'modulo/footer.php'; ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script>
    function verPass(ck) {
        if (ck.checked)
        $('#VerPassWord').attr("type", "text");
        else
        $('#VerPassWord').attr("type", "password");
        }
    </script>
</body>

</html>