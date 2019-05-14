<?php
/**
 * Escribir una página en PHP que permita registrar una queja en una base de datos.
 * Disponer un formulario que permita almacenar el nombre del visitante (objeto HTML de tipo "text"), la descripción de la queja (objeto de tipo 
 * "textarea"). Almacenar en el archivo de texto la fecha y hora de la queja.
 *
 * El archivo "pagina1.php" debe ser el formulario de ingreso de datos.
 * El archivo "pagina2.php" debe registrar la información en la base de datos.
 * Por último el archivo "pagina3.php" debe imprimir todas las quejas registradas hasta el momento. Colocar un hipervínculo en el 
 * archivo "pagina1.php" para poder ver todas las quejas registradas.
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registro de Quejas</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <div class="jumbotron">
                <center>
                    <h1 class="display-6 titulos">Registro de Quejas</h1>
                </center>
                <hr class="my-4">
                <form action="pagina2.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="formGroupExampleInput">Nombre de quien realiza la queja:</label>
                            <input type="text" class="form-control" name="username" 
                            placeholder="Ingrese el nombre del que realiza la queja" required>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="formGroupExampleInput2">Deescripcion de la queja:</label>
                        <br>
                        <textarea name="txtqueja" rows="10"  cols="140" placeholder="Escriba una breve descripcion de la queja"></textarea>
                    </div>
                <center>
                    <button type="submit" class="btn btn-primary">Añadir quejas</button>
                    <a href="pagina3.php" class="btn btn-success">
                    Lista de quejas
                    </a>
                </center>
                </form>
             </div>
            </div>
        </div>
    </div> 
</body>
</html>