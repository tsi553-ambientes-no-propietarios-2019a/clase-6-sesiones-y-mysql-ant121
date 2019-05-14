<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” y 
un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página de inicio.php 
que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del usuario ingresado. 
La página de inicio debe tener un link que permita cerrar la sesión del usuario.
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registro</title>
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
                </center>
                </form>
             </div>
            </div>
        </div>
    </div> 
</body>
</html>