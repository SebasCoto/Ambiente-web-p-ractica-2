<?php  include_once '../Model/VendedorModel.php';


    if(isset($_POST["btnRegistrarVendedor"]))
    {
        $Cedula = $_POST["txtCedula"];
        $Nombre = $_POST["txtNombre"];
        $Correo = $_POST["txtCorreo"];
        $respuesta = RegistrarVendedor($Cedula,$Nombre,$Correo);

        if($respuesta == true)
        {
            header("location: ../View/home.php");
        }
        else
        {
            $_POST["msj"] = "Su información no se ha registrado correctamente.";
        }
    }

    function ConsultarVendedor()
    {
        $respuesta= ConsultarVendedorBD();

        if($respuesta -> num_rows > 0)
        {
            while($row = mysqli_fetch_array($respuesta))
            { 
                echo "<tr>";
                echo "<td>" . $row["Cedula"] . "</td>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td>" . $row["Correo"] . "</td>";
                echo "</tr>";
            }
        }
    }



?>