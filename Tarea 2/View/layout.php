<?php

    function MostrarMenu()
    {
    echo '
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                <a href="consultaVendedor.php" class="nav-link">
                    <i class="nav-icon fas fa-question-circle"></i>
                    <p>Consultar Vendedor</p>
                </a>
                </li>
               
                <li class="nav-item">
                <a href="registroVehiculo.php" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Registro de vehiculos</p>
                </a>
                </li>
            </ul>
            </nav>
        </div>
        </aside>
    ';
    }

    function MostrarNav()
    {
        echo '
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                
                <div class="navbar-nav mx-auto d-flex justify-content-center w-100">
                    <a class="navbar-text font-weight-bold" href="home.php">Concesionario de vehículos</a>
                </div>

            
            </nav>
        ';
    }

?>