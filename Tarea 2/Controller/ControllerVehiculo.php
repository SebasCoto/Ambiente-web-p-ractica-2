<?php  include_once '../Model/VehiculoModel.php';

    if(isset($_POST["btnRegistrarVehiculo"]))
    {
        $Marca = $_POST["txtMarca"];
        $Modelo = $_POST["txtModelo"];
        $Color= $_POST["txtColor"];
        $Precio = $_POST["txtPrecio"];
        $Vendedor = $_POST["txtVendedor"];
        $respuesta = RegistrarVehiculo($Marca,$Modelo,$Color,$Precio,$Vendedor);

        if($respuesta == true)
        {
            header("location: ../View/home.php");
        }
        else
        {
            $_POST["msj"] = "Su información no se ha registrado correctamente.";
        }
    }

?>