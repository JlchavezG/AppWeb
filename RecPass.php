<?php 
    include 'include/querys.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pace.css">
    <script src="js/jquery.js"></script>
    <title>Recuperar Password | Iscjoseluischavezg</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col"></div>
            <div class="col text-end">
                <a href="index" type="button" class="btn btn-outline-primary mb-1">
                    <svg class="bi" width="18" height="18" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#key-fill" />
                    </svg>&nbsp;&nbsp; Inicio de Sesion
                </a>
                <a href="#" type="button" class="btn btn-outline-primary mb-1">
                    <svg class="bi" width="18" height="18" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#question-lg" />
                    </svg>&nbsp;&nbsp; Boton de Ayuda
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-sm-10 col-md-8 col-lg-8 mt-3">
                <div class="row mt-3">
                    <h1 class="display-6 fs-5 text-center">Recuperar Password <span class="text-primary">usuario MindCare</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-sm-10 col-md-8 col-lg-8 mt-3 text-center">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="row mt-2 justify-content-center">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <div class="row mt-2">
                                <img src="img/RecPass.png" alt="registro" style="width: 400px;" class="mx-auto">
                            </div>
                            <div class="row mt-2">
                                <input type="text" name="NombreUserPass" id="nombreUP" class="form-control" placeholder="Nombre de Usurio"
                                    required>
                                    <div class="invalid-feedback">Por favor ingresa tu  de Usuario.</div>
                            </div>
                            <div class="row mt-2">
                                <input type="email" name="EmailUser" id="emailuser" class="form-control"
                                    placeholder="Email" required>
                                    <div class="invalid-feedback">Por favor ingresa tu Email.</div>
                            </div>
                            <div class="row mt-2">
                                <input type="submit" value="RecuperarPass" name="btnRecPass" id="submitBtn"
                                    class="btn btn-sm btn-primary">
                            </div>
                        </div>
                            
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- aviso de privacidad -->
     <?php include 'modulo/AvisoPriv.php'; ?>
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
        // termina la funcion de validacion 
        // activar el boton e registrar en formulario registro de usuarios
                document.getElementById('aceptarTerminos').addEventListener('click', function() {
        // Obtener el estado del checkbox
                let checkbox = document.getElementById('aceptarTerminos');
        // Obtener el botón de submit
                let submitBtn = document.getElementById('submitBtn');
        // Habilitar el botón de submit si el checkbox está marcado
                if (checkbox.checked) {
                    submitBtn.disabled = false;
                } else {
                    submitBtn.disabled = true;
                }
        });
        // funcion para ver el password dentro del registro 
        function verPass(ck) {
        if (ck.checked)
        $('#VerPassWord').attr("type", "text");
        else
        $('#VerPassWord').attr("type", "password");
        }
    </script>
</body>

</html>