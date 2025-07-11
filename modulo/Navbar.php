<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-2 shadow-sm navbar-custom">
    <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="appweb">
            <img src="img/New_Logo_Blanco_2023.png" alt="Logo" style="width:40px; height:auto;" class="me-2">
            <span class="d-none d-md-inline fw-semibold">App Web</span>
        </a>

        <!-- Botón toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido colapsable -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarText">

            <!-- Menú lateral -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active d-flex align-items-center" href="#" data-bs-toggle="offcanvas"
                        data-bs-target="#MenuPrincipal">
                        <svg class="bi me-1" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#three-dots-vertical" />
                        </svg>
                        Menu
                    </a>
                </li>
            </ul>

            <!-- Botón Cerrar Sesión -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="modal"
                        data-bs-target="#CerrarSesionModal">
                        <svg class="bi me-1" width="22" height="22" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#bell-fill" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="modal"
                        data-bs-target="#CerrarSesionModal">
                        <svg class="bi me-1" width="22" height="22" fill="currentColor">
                            <use xlink:href="library/bicons/bootstrap-icons.svg#power" />
                        </svg>
                        Cerrar Sesión
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>