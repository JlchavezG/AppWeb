<!-- Modal Cerrar sesion-->
<div class="modal fade" id="UpdateUserModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="UpdateUserModal"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar datos de usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <form action="<?php echo $_SESSION['PHP_SELF']; ?>" method="post" id="formUpdateUser"></form>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                            <input type="hidden" name="IdUserUp" value="<?php echo $UserOnline['Id_Usuarios']; ?>">
                            <input type="text" class="form-control" name="NombreUserUpdate" value="<?php echo $UserOnline['NombreUser']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Apellido Paterno</span>
                            <input type="text" class="form-control" name="NombreUserUpdate" value="<?php echo $UserOnline['ApellidoP']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Apellido Materno</span>
                            <input type="text" class="form-control" name="ApellidoPUpdate" value="<?php echo $UserOnline['ApellidoM']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                            <input type="tel" class="form-control" name="ApellidoMUpdate" value="<?php echo $UserOnline['TelefonoUser']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                            <input type="email" class="form-control" name="EmailUpdate" value="<?php echo $UserOnline['EmailUser']; ?>">
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>