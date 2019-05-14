<?php
$conn = new mysqli('localhost','root','','base1');
$sql_insert = "SELECT * FROM alumnos";
$res=$conn->query($sql_insert);
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
                    <h1 class="display-6 titulos">Lista de Estudiantes</h1>
                </center>
                <hr class="my-4">
                <table class="table table-hover">
                    <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Mail</td>
                        <td>Codigo del Curso</td>
                        <td>Accion</td>
                    </tr>
                    <?php
                    while($mostrar = $res-> fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['codigo'];?></td>
                        <td><?php echo $mostrar['nombre'];?></td>
                        <td><?php echo $mostrar['mail'];?></td>
                        <td><?php echo $mostrar['codigocurso'];?></td>
                        <td><a href="modificar.php?id=<?php echo $mostrar['codigo'];?>"><button type="submit" class="btn btn-success">Modificar</button></a></td>
                    </tr>
                    <?php }?>
                </table>          
                <center>
                    <a href="index.php">
                    <button type="submit" class="btn btn-primary">Añadir Estudiante</button>
                    </a>
                    <br>
                </center>

             </div>
            </div>
        </div>
    </div> 
</body>
</html>