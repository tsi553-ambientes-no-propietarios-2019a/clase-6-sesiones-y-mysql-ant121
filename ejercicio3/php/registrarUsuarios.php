<?php
if($_GET){
    session_start();
    if(isset($_GET['error_message2'])){
        $error_message2 = $_GET ['error_message2'];
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
    <title>Registro de Usuarios</title>
</head>
<body class="degra">
    <div class="container">
        <div class="row">

          <div class="col-sm-12">
            <div class="jumbotron">
                <center>
                        <h1 class="display-6 titulos">Nuevo Usuario</h1>
                </center>
                <hr class="my-4">
                <form action="guardarDatos.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombres:</label>
                      <input type="text" class="form-control" name="txtnombre" 
                      placeholder="Ingrese sus dos nombres" required>
                    </div>

                    <div class="form-group">
                      <label for="formGroupExampleInput2">Apellidos:</label>
                      <input type="text" class="form-control" name="txtapellido" 
                      placeholder="Ingrese sus dos apellidos" required>
                    </div>

                    <div class="form-group">
                      <label for="formGroupExampleInput2">Nombre de usuario:</label>
                      <input type="text" class="form-control" name="username" 
                      placeholder="Username" required>
                    </div>
                    
                    <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="formGroupExampleInput2">Contraseña:</label>
                                <input type="password" class="form-control" name="txtpassword" 
                                placeholder="Ingrese su contraseña" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="formGroupExampleInput2">Repita su contraseña:</label>
                                <input type="password" class="form-control" name="txtpassword2" 
                                placeholder="Repita su contraseña" required>
                            </div>
                    </div>

                    <div class="row">
                            <div class="form-group col-sm-6">
                                    <label for="formGroupExampleInput2">e-mail</label>
                                    <input type="text" class="form-control" name="txtemail" 
                                    placeholder="Ingrese su e-mail" required>
                            </div>

                            <div class="form-group col-sm-6">
                                    <label for="formGroupExampleInput2">Fecha de Nacimiento:</label>
                                    <input type="date" name="Nacimiento" class="form-control" required>
                            </div>
                    </div> 
                    <div class="form-group">
                            <label for="formGroupExampleInput2">Ciudad de Nacimiento:</label>
                                <select class="custom-select form-control" id="inputGroupSelect01" name="ciudadNacimiento" required>
                                    <option value="">Seleccione</option>
                                    <option value="Quito">Quito</option>
                                    <option value="Guayaquil">Guayaquil</option>
                                    <option value="Cuenca">Cuenca</option>
                                    <option value="Machala">Machala</option>
                                    <option value="Ambato">Ambato</option>
                                    <option value="Guaranda">Guaranda</option>
                                    <option value="Ibarra">Ibarra</option>
                                    <option value="Latacunga">Latacunga</option>
                                    <option value="Santo domingo de los Colorados">Santo domingo de los Colorados</option>
                                </select>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                             <label for="formGroupExampleInput2">Genero:</label>
                        </div>
                        <div class="container-fluid">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio"  id="customRadioInline1" name="rGenero" class="custom-control-input" value="Masculino">
                                <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="rGenero" class="custom-control-input" value="Femenino">
                                <label class="custom-control-label" for="customRadioInline2">Femenino</label>
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                        <br>
                             <label for="formGroupExampleInput2">Intereses:</label>
                        </div>
                    </div>
                    <div class="container">
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="form-control custom-control-input" id="customCheck1" name="VInteres1" value="Programacion">
                        <label class="custom-control-label" for="customCheck1">Programacion</label>
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="form-control custom-control-input" id="customCheck2" name="VInteres2" value="Redes">
                        <label class="custom-control-label" for="customCheck2">Redes</label>
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="form-control custom-control-input" id="customCheck3" name="VInteres3" value="Ensamblaje">
                        <label class="custom-control-label" for="customCheck3">Ensamblaje</label>
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="form-control custom-control-input" id="customCheck4" name="VInteres4" value="SOA">
                        <label class="custom-control-label" for="customCheck4">SOA</label>
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="form-control custom-control-input" id="customCheck5" name="VInteres5" value="BI">
                        <label class="custom-control-label" for="customCheck5">BI</label>
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="form-control custom-control-input" id="customCheck6" name="VInteres6" value="Analisis de texto">
                        <label class="custom-control-label" for="customCheck6">Analisis de texto</label>
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="form-control custom-control-input" id="customCheck7" name="VInteres7" value="Big Data">
                        <label class="custom-control-label" for="customCheck7">Big data</label>
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="form-control custom-control-input" id="customCheck8" name="VInteres8" value="Redes Sociales">
                        <label class="custom-control-label" for="customCheck8">Redes sociales</label>
                    </div>
                    </div>

                    <div class="form-group col-sm-12">
                      <label for="formGroupExampleInput2">Biografia:</label>
                      <br>
                      <textarea name="txtbiografia" rows="10"  cols="140" placeholder="Escriba una breve biografia(opcional)"></textarea>
                    </div>
                    <center>
                            <button type="submit" class="btn btn-primary">Guardar Datos</button>
                            <br>
                            <?php
                            if(isset($error_message2)){
                                echo $error_message2;
                            }
                            ?>
                    </center>
                  </form>

            </div>
          </div>
        </div>
    </div> 
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>