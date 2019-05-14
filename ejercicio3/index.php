<?php
/*
Basados en el ejemplo 2:
a) Controlar que solo inicie sesión si se han escrito el usuario y contraseña en los campos. 
b) Validar el usuario y contraseña contra una lista de usuarios y contraseñas almacenados en un array o una base de datos (tabla usuarios).
c) Crear un formulario que le permita registrar un usuario con los siguientes datos: 
     - nombre
     - apellidos
     - usuario
     - clave
     - repetir clave
     - género: masculino, femenino (radio)
     - correo electrónico
     - fecha de nacimiento
     - ciudad de nacimiento (lista de ciudades)
     - intereses: programación, redes, ensamblaje, SOA, BI, análisis de texto, big data, redes sociales   (checkbox)
     - una breve biografía
d) El formulario anterior debe ser enviado a través de un botón submit mediante POST y debe guardar la información en la base de datos 
   (tabla usuarios) y presentar una página con toda la información ingresada en el formulario, esta página debe incluir un link que permita 
   volver a ingresar los datos y un link que permita cerrar la sesión y volver al index.
*/
if($_GET){
    if(isset($_GET['error_message'])){
        $error_message = $_GET ['error_message'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <div class="jumbotron">
                <center>
                    <h1 class="display-6 titulos">Login</h1>
                </center>
                <hr class="my-4">
                <form action="php/iniciarSesion.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="formGroupExampleInput">Nombre de Usuario</label>
                            <input type="text" class="form-control" name="username" 
                            placeholder="Ingrese el nombre de usuario" required>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Contraseña</label>
                            <input type="password" class="form-control" name="password" 
                            placeholder="Ingrese su contraseña" required>
                    </div>
                <center>
                    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    <br>
                    <br>
                    <?php
                    if(isset($error_message)){
                        echo $error_message;
                    }
                    ?>
                </center>
                </form>
             </div>
            </div>
        </div>
    </div> 
</body>
</html>