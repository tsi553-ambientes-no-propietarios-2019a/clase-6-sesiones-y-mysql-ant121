<?php
if(isset($_POST['txtEstudiante']) && isset($_POST['txtemail']) && isset($_POST['txtCurso'])){
    if(is_numeric ($_POST['txtCurso'])){
        $conn = new mysqli('localhost','root','','base1');
                                $nombres=$_POST['txtEstudiante'];
                                $email=$_POST['txtemail'];
                                $curso=$_POST['txtCurso'];

    $sql_insert = "INSERT INTO alumnos (nombre, mail, codigocurso ) VALUES ('$nombres','$email', '$curso')";
    $res=$conn->query($sql_insert);

    if($conn->error){
        header('Location: index.php?error_message=Ocurrio un error: ' . $conn->error);
        exit;
    }else{
       header('Location: lista.php');
    }
    }else{
        header('Location: index.php?error_message=El codigo de curso no es un numero intentelo de nuevo!');
    }  
   }else{
   header('Location: index.php?error_message=Acceso restringido!');
   exit;
   }
?>