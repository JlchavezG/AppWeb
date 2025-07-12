<div class="row g-4 mt-1">
            <!-- Card 1:  -->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div
                    class="card shadow dashboard-card card-welcome d-flex flex-md-row align-items-center justify-content-between p-3">
                    <div>
                        <h5 class="fw-bold mb-1"><?php echo $saludo; ?>:
                            <?php echo $UserOnline['NombreUser'] . " " . $UserOnline['ApellidoP'] . " " . $UserOnline['ApellidoM']; ?>
                        </h5>
                        <p class="text-muted mb-1"><strong>Tu tipo de usuario es:</strong>
                            <?php echo $UserOnline['NomTuser']; ?> </p>
                        <p class="text-muted mb-1"><strong>Tu email:</strong> <?php echo $UserOnline['EmailUser']; ?>
                        </p>
                        <button class="mt-2 btn btn-outline-primary btn-sm">Ver Perfil</button>
                    </div>
                    <img src="img/Desarrollador.png" alt="Congrats" class="welcome-img d-none d-md-block img-fluid"
                        width="180px">
                </div>
            </div>

            <!-- Card 2:  -->
            <div class="col-md-3">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#person-add" />
                            </svg> Total de Usuarios
                        </h6>
                        <h4 class="fw-bold"><?php echo $TotalUser; ?></h4>
                    </div>
                </div>
            </div>

            <!-- Card 3:  -->
            <div class="col-md-3">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#person-fill-check" />
                                </svg> Usuarios Online
                            </h6>
                            <h4 class=" fw-bold"><?php echo $TEUserOnliine; ?></h4>
                    </div>
                </div>
            </div>

            <!-- Card 4:  -->
            <div class="col-md-3">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#box2-fill" />
                            </svg> Productos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 5:  -->
            <div class="col-md-3">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Ventas
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 6:  -->
            <div class="col-md-6">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#truck" />
                            </svg> Entregas Pendientes
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 7:  -->
            <div class="col-md-6">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#truck-flatbed" />
                            </svg> Total de Entregas
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 8:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#inboxes-fill" />
                            </svg> Facturas
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 9:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 10:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 11:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 12:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

            <!-- Card 13:  -->
            <div class="col-md-2">
                <div class="card shadow dashboard-card text-start">
                    <div class="card-body">
                        <h6 class="text-muted">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#bag-fill" />
                            </svg> Pedidos
                        </h6>
                        <h4 class="fw-bold">0</h4>
                    </div>
                </div>
            </div>

        </div>