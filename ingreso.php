<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INMO</title>
    <link rel="stylesheet" href="ingreso.css">

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

    <div class="container">
        <form>
            <h2>Ingresar</h2>

            <div class="for-group">
                <p>Usuario: </p>
                <input type="usuario" class="form-control" name="Usuario" required="">
            </div>

            <div class="for-group">
                <p>Contraseña: </p>
                <input type="contraseña" class="form-control" name="Contraseña" required="">
            </div>

            <a href="accion.php"><div class="for-group">
                <input type="submit" value="Sig In">
            </div></a>


        </form>

        <oc href="#">¿Olvido su Contraseña?</oc>
    </div>

    <a href="usuario.php" ><div class="contenedor">

        <div class="boton">

            <button class="boton"><span>Crear Usuario</span></button>

        </div>


    </div></a>


</body>

</html>