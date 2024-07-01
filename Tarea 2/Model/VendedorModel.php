<?php include_once 'baseDatosModel.php';
    function RegistrarVendedor($Cedula,$Nombre,$Correo)
    {
        $conexion = AbrirBaseDatos();
        $sentencia = "CALL RegistrarVendedor('$Cedula','$Nombre','$Correo')";
        $respuesta = $conexion -> query($sentencia);
        CerrarBaseDatos($conexion);
        return $respuesta;
    }

    function ConsultarVendedorBD()
    {
        $conexion = AbrirBaseDatos();
        $sentencia = "CALL ConsultarVendedor()";
        $respuesta = $conexion -> query($sentencia);
        CerrarBaseDatos($conexion);
        return $respuesta;
    }


?>