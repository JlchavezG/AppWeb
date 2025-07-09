<!-- Modal Cerrar sesion-->
<div class="modal fade" id="CerrarSesionModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="CerrarSesionModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="text-center">Deceas salir del sistema: <?php echo $UserOnline['NombreUser']." ?"?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="include/cerrar.php" class="btn btn-danger">Cerrar Sesion</a>
      </div>
    </div>
  </div>
</div>