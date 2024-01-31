<?php

include("conexion.php");

if(isset($_POST['send'])) {

  if(
    trim($_POST['nombres']) != "" &&
    trim($_POST['cedula']) != "" &&
    trim($_POST['correo']) != "" &&
    trim($_POST['nombre_usuario']) != ""
  ) {

    $datos = $_POST;

    $datos['contraseña'] = password_hash($datos['contraseña'], PASSWORD_DEFAULT);

    $consulta = "INSERT INTO crear_usuario(nombres, cedula, correo, nombre_usuario, contraseña)
      VALUES ('{$datos['nombres']}', '{$datos['cedula']}', '{$datos['correo']}', '{$datos['nombre_usuario']}', '{$datos['contraseña']}')";
    $resultado = mysqli_query($conex, $consulta);

    if($resultado) {

      header('Location: ingreso.php');

    } else {

      echo "<h3 class='error'>Ocurrió un error</h3>";

    }

  } else {

    echo "<h3 class='error'>Completar todos los campos</h3>";

  }

}

?>

