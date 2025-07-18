<!-- Offcanvas menú lateral -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="MenuPrincipal">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menú Sistemas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link menu-link" href="perfil?id_user=<?php echo $UserOnline['Id_Usuarios'];?>">
                    <img src="img/user/<?php echo $UserOnline['ImgUser'];?>" alt="perfil" width="40" height="40" class="rounded-circle shadow-sm">
                    &nbsp;  <?php echo $UserOnline['NombreUser']; ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="appweb">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#house-fill" />
                    </svg>&nbsp; Inicio
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="servicios.html">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#people-fill" />
                    </svg>&nbsp; Usuarios
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="productos.html">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#upc-scan" />
                    </svg>&nbsp; Productos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="acerca.html">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#journals" />
                    </svg>&nbsp; Catalogo
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="contacto.html">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#box-seam-fill" />
                    </svg>&nbsp; Inventario
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="contacto.html">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#inboxes-fill" />
                    </svg>&nbsp; Facturas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="contacto.html">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#bar-chart" />
                    </svg>&nbsp; Reportes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="contacto.html">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#suitcase-lg-fill" />
                    </svg>&nbsp; Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="contacto.html">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#lock-fill" />
                    </svg>&nbsp; Seguridad y Auditoria
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="contacto.html">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#toggles2" />
                    </svg>&nbsp; Soporte y Mantenimiento
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#" data-bs-toggle="modal" data-bs-target="#CerrarSesionModal">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#power" />
                    </svg>&nbsp; Cerrar Sesion
                </a>
            </li>
        </ul>
    </div>
</div>