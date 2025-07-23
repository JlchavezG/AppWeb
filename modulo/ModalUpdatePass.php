<!-- Modal Cerrar sesion-->
<div class="modal fade" id="ModalUpdatePass" data-bs-backdrop="static" tabindex="-1" aria-labelledby="ModalUpdatePass"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar tu <span class="text-primary">Password</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="Post" id="userPass">
                <div class="modal-body">
                    <div class="row mt-1 mb-1">
                        <input type="hidden" name="idUserPass" value="<?php echo $UserOnline['Id_Usuarios'];?>">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Password Actual</span>
                            <input type="password" class="form-control" name="passactual" placeholder="Password Actual"
                                aria-label="Password Actual" aria-describedby="addon-wrapping" required>
                        </div>
                    </div>
                    <div class="row mt-1 mb-1">
                        <div class="input-group">
                            <span class="input-group-text">Nuevo Password</span>
                            <input type="password" aria-label="Nuevo password" name="passnew" class="form-control"
                                placeholder="Nuevo password" required>
                            <input type="password" name="passverific" aria-label="Verifica nuevo password"
                                class="form-control" placeholder="Verifica nuevo password" required>
                        </div>
                    </div>
                    <!-- Nuevo contenedor para el mensaje -->
                    <div class="row">
                        <div class="col-12" id="feedback-row"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-outline-primary" name="btnUpdatePass" data-bs-dismiss="modal"
                        value="Actualizar">
            </form>
        </div>
    </div>
</div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("userPass");
    const passNew = form.querySelector("input[name='passnew']");
    const passVerific = form.querySelector("input[name='passverific']");
    const feedbackContainer = document.getElementById("feedback-row");

    // Crear div de mensaje dinámico
    const feedback = document.createElement("div");
    feedback.classList.add("mt-1");
    feedbackContainer.appendChild(feedback);

    // Validación en tiempo real
    passVerific.addEventListener("input", function () {
        if (passVerific.value.length === 0) {
            feedback.textContent = "";
            passVerific.classList.remove("is-valid", "is-invalid");
            passNew.classList.remove("is-valid", "is-invalid");
        } else if (passNew.value === passVerific.value) {
            feedback.textContent = "✅ Los passwords coinciden.";
            feedback.style.color = "green";
            passVerific.classList.add("is-valid");
            passVerific.classList.remove("is-invalid");
            passNew.classList.add("is-valid");
            passNew.classList.remove("is-invalid");
        } else {
            feedback.textContent = "❌ El nuevo password no coincide con la confirmación.";
            feedback.style.color = "red";
            passVerific.classList.add("is-invalid");
            passVerific.classList.remove("is-valid");
            passNew.classList.add("is-invalid");
            passNew.classList.remove("is-valid");
        }
    });
});
</script>