<?php include_once 'baseDatosModel.php';
    function RegistrarVehiculo($Marca,$Modelo,$Color,$Precio,$Vendedor)
    {
        $conexion = AbrirBaseDatos();
        $sentencia = "CALL RegistrarVehiculo('$Marca','$Modelo','$Color','$Precio','$Vendedor')";
        $respuesta = $conexion -> query($sentencia);
        CerrarBaseDatos($conexion);
        return $respuesta;
    }



?>