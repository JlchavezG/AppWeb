<div class="row mt-1">
            <!-- Card de busqueda:  -->
            <div class="col-md-12 mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="">
                                <div class="input-group mb-1">
                                    <button class="btn btn-outline-primary" type="button" id="button-addon1">
                                        <svg class="bi" width="20" height="20" fill="currentColor">
                                            <use xlink:href="library/bicons/bootstrap-icons.svg#search" />
                                        </svg>
                                    </button>
                                    <input type="text" class="form-control" placeholder="Busqueda"
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                            </form>
                        </div>
                        <div class="col text-end">
                            <!-- Dropdown Imagen de Perfil -->
                            <div class="dropdown text-end">
                                <span> Hola: <?php echo $UserOnline['NombreUser']; ?> &nbsp;</span>
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://i.pravatar.cc/40" alt="mdo" width="40" height="40"
                                        class="rounded-circle shadow-sm">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end text-small shadow"
                                    aria-labelledby="userDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <svg class="bi" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#person-fill" />
                                            </svg> Perfil
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <svg class="bi" width="20" height="20" fill="currentColor">
                                                <use
                                                    xlink:href="library/bicons/bootstrap-icons.svg#gear-wide-connected" />
                                            </svg> Configuración
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="#">
                                            <svg class="bi" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#power" />
                                            </svg> Cerrar sesión
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>