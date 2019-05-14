<?php
$conn = new mysqli('localhost','root','','quejas');
$sql_insert = "SELECT * FROM quejas";
$res=$conn->query($sql_insert);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lista de Quejas</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <div class="jumbotron">
                <center>
                    <h1 class="display-6 titulos">Lista de Quejas</h1>
                </center>
                <hr class="my-4">
                <table class="table table-hover">
                    <tr>
                        <td><b>Id</b></td>
                        <td><b>Nombre</b></td>
                        <td><b>e-mail</b></td>
                        <td><b>Queja</b></td>
                    </tr>
                    <?php
                    while($mostrar = $res-> fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['id'];?></td>
                        <td><?php echo $mostrar['nombre'];?></td>
                        <td><?php echo $mostrar['queja'];?></td>
                        <td><?php echo $mostrar['fechaQueja'];?></td>
                    </tr>
                    <?php }?>
                </table>          
                <center>
                    <a href="pagina1.php" class="btn btn-success">Añadir queja
                    </a>
                    <br>
                </center>
             </div>
            </div>
        </div>
    </div> 
</body>
</html>