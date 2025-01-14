<?php include_once '../Controller/ControllerVehiculo.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practica 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
</head>

<body class="hold-transition register-page fondoRegistroA">
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registro de vehiculo</p>

                <?php
                    if(isset($_POST["msj"]))
                    {
                        echo '<div class="alert alert-danger TextoCentrado">' . $_POST["msj"] . '</div>';
                    }
                ?>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input id="txtMarca" name="txtMarca" type="text" class="form-control" placeholder="Marca">
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="txtModelo" name="txtModelo" type="text" class="form-control" placeholder="Modelo"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="txtColor" name="txtColor" type="text" class="form-control" placeholder="Color"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="txtPrecio" name="txtPrecio" type="number" step="0.01" class="form-control"
                            placeholder="Precio" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                $
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="txtVendedor" name="txtVendedor" type="number" class="form-control"
                            placeholder="Vendedor" required>
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">

                        </div>
                        <div class="col-5">
                            <button type="submit" id="btnRegistrarVehiculo" name="btnRegistrarVehiculo"
                                class="btn btn-success btn-block">Registrar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    <script src="dist/js/usuarios.js"></script>
</body>

</html>