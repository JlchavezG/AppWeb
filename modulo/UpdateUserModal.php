<!-- Modal Cerrar sesion-->
<div class="modal fade" id="UpdateUserModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="UpdateUserModal"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar tus datos de <span class="text-primary">usuario</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo $_SESSION['PHP_SELF']; ?>" method="post" id="formUpdateUser">
            <div class="modal-body text-center">
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                            <input type="hidden" name="idUpdate" value="<?php echo $UserOnline['Id_Usuarios']; ?>">
                            <input type="text" class="form-control" name="NombreUser"
                                value="<?php echo $UserOnline['NombreUser']; ?>" placeholder="Digita tu nombre por favor">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Apellido Paterno</span>
                            <input type="text" class="form-control" name="ApellidoP"
                                value="<?php echo $UserOnline['ApellidoP']; ?>" placeholder="Digita tu apellido paterno por favor">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Apellido Materno</span>
                            <input type="text" class="form-control" name="ApellidoM"
                                value="<?php echo $UserOnline['ApellidoM']; ?>" placeholder="Digita tu Apellido materno por favor">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                            <input type="tel" class="form-control" name="TelefonoUser"
                                value="<?php echo $UserOnline['TelefonoUser']; ?>" placeholder="Digita tu telefono de contacto por favor">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                            <input type="email" class="form-control" name="EmailUser"
                                value="<?php echo $UserOnline['EmailUser']; ?>" placeholder="Digita tu email de contaco por favor">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Fecha Naciimiento</span>
                            <input type="date" class="form-control" name="FechaNacr"
                                value="<?php echo $UserOnline['FechNacUser']; ?>" placeholder="Selecciona tu fecha de nacimiento por favor">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">UserNick</span>
                            <input type="text" class="form-control" name="NickUpdate"
                                value="<?php echo $UserOnline['UserName']; ?>" placeholder="Digita tu nombre de usuario por favor">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-primary" name="btnAupdateUser">Actualizar datos</button>
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>