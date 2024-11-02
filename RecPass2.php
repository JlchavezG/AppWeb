<?php
include 'include/querys.php';
include 'include/action.php';
// validar si se enviaron variables de tipo get al encontrar al usuario
if (!isset($_GET['id']) && !isset($_GET['Email'])) {
    header("Location: RecPass");
}
$IdUserM = $_GET['id'];
$EmailIdUser = $_GET['Email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pace2.css">
    <link rel="stylesheet" href="css/main.css">
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
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#AyudaRecPass" type="button"
                    class="btn btn-outline-primary mb-1">
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
                    <h1 class="display-6 fs-5 text-center">Actualiza tu Password <span class="text-primary">Usuario
                            MindCare</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-sm-10 col-md-8 col-lg-8 mt-3 text-center">
                <form action="ResulreccuperaUser" method="post" class="needs-validation" novalidate>
                    <div class="row mt-2 justify-content-center">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <div class="row mt-2 mb-2">
                                <?php echo $AlertRecuperar; ?>
                            </div>
                            <div class="row mt-2">
                                <img src="img/RecPass.png" alt="registro" style="width: 400px;" class="mx-auto">
                            </div>
                            <div class="row mt-2">
                                <input type="hidden" name="idUser" id="idUser" value="<?php echo $IdUserM; ?>">
                                <input type="hidden" name="IdEmail" id="IdEmail" value="<?php echo $EmailIdUser ?>">
                                <input type="password" name="NewPasswordUser" id="VerPassWord" class="form-control"
                                    placeholder="Nuevo Password" required>
                                <div class="invalid-feedback">Por favor ingresa tu nuevo password.</div>
                            </div>
                            <div class="row mt-2">
                                <input type="password" name="NewPass2" id="VerPassWord1" class="form-control"
                                    placeholder="Rectifica Nuevo password" required>
                                <div class="invalid-feedback">Por favor ingresa de nuevo tu nuevo password.</div>
                            </div>
                            <div class="row justify-content-end mt-2 mb-2">
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" id="VerPass" class="form-check-input"
                                            onclick="verPass(this);">
                                        <label for="VerPass" class="form-check-label">Visualizar Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <span id="error"></span>
                            </div>
                            <div class="row mt-2">
                                <input type="submit" value="Actualizar password" name="ModificarPassUser" id="submitBtn"
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
    <!-- modulo ayuda recuperar password  -->
    <?php include 'modulo/AyudaRecPass.php'; ?>
    <!-- Footer  - Bootstrap menu -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.js"></script>
    <script src="main.js"></script>
    <script>
        var User = document.getElementById("idUser");
        var Email = document.getElementById("IdEmail");
        User.type = "hidden";
        Email.type = "hidden";
        function verPass(ck) {
            if (ck.checked)
                $('#VerPassWord').attr("type", "text");
            else
                $('#VerPassWord').attr("type", "password");
        }
    </script>
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
        document.getElementById('aceptarTerminos').addEventListener('click', function () {
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
    <script>
        // Seleccionar los campos de password y el div para el mensaje
        const password = document.getElementById('VerPassWord');
        const password1 = document.getElementById('VerPassWord1');
        const mensaje = document.getElementById('error');

        // Evento que se activa al terminar de escribir en el campo password1
        password1.addEventListener('input', function () {
            if (password.value === password1.value) {
                // Si las contraseñas coinciden
                mensaje.textContent = 'Excelente recuerdas bien tu password';
                mensaje.className = 'correcto';
            } else {
                // Si no coinciden
                mensaje.textContent = 'Verifica nien el password no coincide';
                mensaje.className = 'incorrecto';
            }
        });
    </script>
</body>

</html>