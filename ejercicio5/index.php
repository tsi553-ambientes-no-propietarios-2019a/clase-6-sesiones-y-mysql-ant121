<?php
/**
* Crear una base de datos en PHPMyAdmin: Para crear una base de datos procedemos a seleccionar la pestaña "Base de datos" e ingresamos 
* como nombre "base1" y presionamos el botón crear.
* Crear una tabla llamada "alumnos" con 4 campos y la siguiente estructura:
*      codigo int auto_increment primary key
*      nombre varchar(50)
*      mail varchar(70)
*      codigocurso int
* Utilizar un formulario para añadir alumnos a la BDD. El formulario debe tener como acción "nuevo.php".
* En la página "lista.php" presentar una tabla con todos los alumnos de la BDD. Al final de cada fila añadir un campo que contenga un link
* que redirija a la página "modificar.php"
* En la página "modificar.php" presentar el formulario que permita modificar la información del alumno seleccionado.
*
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
    <title>Nuevo Estudiante</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <div class="jumbotron">
                <center>
                    <h1 class="display-6 titulos">Nuevo Estudiante</h1>
                </center>
                <hr class="my-4">
                <form action="nuevo.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="formGroupExampleInput">Nombre del Estudiante</label>
                            <input type="text" class="form-control" name="txtEstudiante" 
                            placeholder="Ingrese el nombre del estudiante" required>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">e-mail</label>
                            <input type="text" class="form-control" name="txtemail" 
                            placeholder="Ingrese su e-mail" required>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Codigo de curso</label>
                            <input type="text" class="form-control" name="txtCurso" 
                            placeholder="Ingrese su codigo de curso" required>
                    </div>
                <center>
                    <button type="submit" class="btn btn-success">Añadir Estudiante</button>
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