<!-- Modal Cerrar sesion-->
<div class="modal fade" id="QrUserModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="QrUserModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Codigo Qr Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mt-1 mb-1 text-center">
            <img src="<?php echo 'img/qrs/usuario_' . $UserOnline['id'] . '.png'; ?>" width="250px">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>