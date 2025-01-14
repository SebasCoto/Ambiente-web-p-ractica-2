<?php include_once 'layout.php';
      include_once '../Controller/ControllerVendedor.php'; 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practica2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">

    <!-- Agrega este bloque de estilo -->
    <style>
        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }
        
        .table thead {
            background-color: #343a40;
            color: white;
        }
        
        .table tbody tr:nth-child(odd) {
            background-color: #e9ecef;
        }
        
        .table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php 
          MostrarNav();
          MostrarMenu();
        ?>

        <div class="content-wrapper">
            <section class="content">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            ConsultarVendedor();
                        ?>
                    </tbody>
                </table>

            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2024 </strong>
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>