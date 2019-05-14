<?php
if($_GET){
    if(isset($_GET['id'])){
        $codigo = $_GET ['id'];
    }
}

$conn = new mysqli('localhost','root','','base1');
$sql_insert = "SELECT * FROM alumnos where codigo=$codigo";
$res=$conn->query($sql_insert);
$mostrar = $res->fetch_assoc();
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
                <form action="modificar2.php?id=<?php echo $codigo?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="formGroupExampleInput">Nombre del Estudiante</label>
                            <input type="text" class="form-control" name="txtEstudiante" 
                            placeholder="Ingrese el nombre del estudiante" value="<?php echo $mostrar['nombre'];?>" required> 
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">e-mail</label>
                            <input type="text" class="form-control" name="txtemail" 
                            placeholder="Ingrese su e-mail" value="<?php echo $mostrar['mail'];?>" required>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Codigo de curso</label>
                            <input type="text" class="form-control" name="txtCurso" 
                            placeholder="Ingrese su codigo de curso" value="<?php echo $mostrar['codigocurso'];?>" required>
                    </div>
                <center>
                    <button type="submit" class="btn btn-primary">Modificar Estudiante</button>
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