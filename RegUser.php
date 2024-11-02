<?php
include 'include/querys.php';
include 'include/action.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pace2.css">
    <script src="js/jquery.js"></script>
    <title>Registro de Usuario | Iscjoseluischavezg</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-sm-10 col-md-8 col-lg-8 mt-3">
                <div id="alert-container"></div>
                <div class="row mt-3">
                    <h1 class="display-6 fs-5 text-center">Registro de <span class="text-primary">usuario
                            MindCare</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-sm-10 col-md-8 col-lg-8 mt-3 text-center">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col text-center">
                            <a href="index" type="button" class="btn btn-outline-primary mb-1">
                                <svg class="bi" width="18" height="18" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#key-fill" />
                                </svg>&nbsp;&nbsp; Inicio de Sesion
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#AyudaRegistro" type="button" class="btn btn-outline-primary mb-1">
                                <svg class="bi" width="18" height="18" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#question-lg" />
                                </svg>&nbsp;&nbsp; Boton de Ayuda
                            </a>
                        </div>
                    </div>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="needs-validation" novalidate>
                    <div class="row mt-2 justify-content-center">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <div class="row mt-2">
                                <img src="img/registro.avif" alt="registro" style="width: 300px;" class="mx-auto">
                            </div>
                            <div class="row mt-2 mb-2">
                                <?php echo $AlertReg; ?>
                            </div>
                            <div class="row mt-2">
                                <input type="text" name="Nombre" id="nombre" class="form-control" placeholder="Nombre"
                                    required>
                                <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
                            </div>
                            <div class="row mt-2">
                                <input type="text" name="Apaterno" id="apaterno" class="form-control"
                                    placeholder="Apellido Paterno" required>
                                <div class="invalid-feedback">Por favor ingresa tu Apallido paterno.</div>
                            </div>
                            <div class="row mt-2">
                                <input type="text" name="Amaterno" id="amaterno" class="form-control"
                                    placeholder="Apellido Materno" required>
                                <div class="invalid-feedback">Por favor ingresa tu Apellido materno.</div>
                            </div>
                            <div class="row mt-2">
                                <input type="tel" name="TelefonoUser" id="telefonouser" class="form-control"
                                    placeholder="Telefono" required>
                                <div class="invalid-feedback">Por favor ingresa tu Telefono.</div>
                            </div>
                            <div class="row mt-2">
                                <input type="email" name="EmailUser" id="emailuser" class="form-control"
                                    placeholder="Email" required>
                                <div class="invalid-feedback">Por favor ingresa tu Email.</div>
                            </div>
                            <div class="row mt-2">
                                <label for="FechaNacUser" class="text-start">Fecha de Nacimiento</label>
                                <input type="date" name="FechNacUser" id="FechNacUser" class="form-control" required>
                            </div>
                            <div class="row mt-2">
                                <select class="form-select  mb-1" name="UserGenero" required>
                                    <option selected>Selecciona tu genero</option>
                                    <?php while ($GeneroU = $EGenero->fetch_assoc()) { ?>
                                        <option value="<?php echo $GeneroU['Id_Genero']; ?>">
                                            <?php echo $GeneroU['NomGenero']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="row mt-2">
                                <select class="form-select  mb-1" name="Tusuario" required>
                                    <option selected>Como deseas registrate en nuestra plataforma</option>
                                    <?php while ($TiposU = $ETusuariosC->fetch_assoc()) { ?>
                                        <option value="<?php echo $TiposU['Id_Tusuario']; ?>">
                                            <?php echo $TiposU['NomTuser']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="row mt-2">
                                <input type="UserNick" name="userNick" id="usernick" class="form-control"
                                    placeholder="Nombre de Usuario" required>
                                <div class="invalid-feedback">Por favor ingresa tu Nombre de usuario.</div>
                            </div>
                            <div class="row mt-2">
                                <input type="password" name="passUser" id="VerPassWord" class="form-control"
                                    placeholder="Password" required>
                                <div class="invalid-feedback">Por favor ingresa tu password.</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" id="aceptarTerminos" class="form-check-input" onclick="">
                                        <label for="VerPass" class="form-check-label"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#AvisoPrivacidad" class="text-decoration-none">Acepta
                                                Aviso de Privacidad</a></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" id="VerPass" class="form-check-input"
                                            onclick="verPass(this);">
                                        <label for="VerPass" class="form-check-label">Visualizar Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 mb-5">
                                <input type="submit" value="Registrar" name="btnRegistrar" id="submitBtn"
                                    class="btn btn-sm btn-primary" disabled>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- adjuntar mosulo de ayuda de registro -->
    <?php include 'modulo/AyudaReg.php'; ?>
    <!-- aviso de privacidad -->
    <?php include 'modulo/AvisoPriv.php'; ?>
    <!-- Footer  - Bootstrap menu -->
    
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
</body>

</html>