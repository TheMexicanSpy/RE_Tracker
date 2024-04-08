<?php

include("conexion.php");

if (isset($_POST['register'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1
      ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre, email, contraseña, fecha)
                VALUES('$name', '$email', '$password', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {

                ?>
                <h3 class = "success"> Registro Exitoso </h3>
                <?php
                header("Location: interfaz.php");
                exit;
            } else{
                ?>
                <h3 class = "error"> Ha ocurrido un error </h3>
                <?php
            }

        } else {
            ?>
                <h3 class = "error"> Llena todos los campos </h3>
            <?php
        }

}

?>
