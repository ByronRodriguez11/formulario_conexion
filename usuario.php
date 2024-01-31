<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INMO USUARIO</title>
    <link href="ingreso.php">
    <link rel="stylesheet" href="usuario.css">
    
</head>

<body>
    
    
    <div class="img2">

        <img class="alinear" src="img/inmo_logo.png" width="300px" height="100px" alt="no carga">

    </div>

    <div class="img1">

         <img class="alinear" src="img/fijacion.png" width="300px" height="100px" alt="no carga">

    </div>

        <h1>INMO "Inventario Material de Osteosíntesis"</h1>
        <hr>
        
        <div class="contenedor">
            
            <form method="post" autocomplete="off">
                <h2>Crea tu Usuario</h2>
    
                <div class="for-group">
                    <p>Nombres: </p>
                    <input type="nombres" class="form-control" name="nombres" required="">
                    <i class = "fa-solid fa-user"></i>
                
                    </div>

                <div class="for-group">
                    <p>Cedula: </p>
                    <input type="cedula" class="form-control" name="cedula" required="">
                    <i class = "fa-solid fa-user"></i>
                </div>

                <div class="for-group">
                    <p>Correo Electrónico: </p>
                    <input type="correo" class="form-control" name="correo" required="">
                    <i class = "fa-solid fa-envelope"></i>
                </div>

                <div class="for-group">
                    <p>Nombre Usuario: </p>
                    <input type="nombre_usuario" class="form-control" name="nombre_usuario" required="">
                    <i class = "fa-solid fa-user"></i>
                </div>

                <div class="for-group">
                    <p>Contraseña: </p>
                    <input type="contraseña" class="form-control" name="Contraseña" required="">
                    <i class = "fa-solid fa-lock"></i>
                </div>

                <div class="for-group">

                <input type="submit" name = "send" class="button" value="crear" >

                </div>
    
            </form>

        </div>

    <a href="ingreso.php"><button class = "btn" id="Continuar">&emsp;Regresar&emsp;</button></a>

    <?php
    include ("send.php");
    ?>

</body>

</html>