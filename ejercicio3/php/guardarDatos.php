<?php
if(isset($_POST['txtpassword']) && isset($_POST['txtpassword2'])){
    session_start();
    if($_POST['txtpassword'] == $_POST['txtpassword2']){
     $conn = new mysqli('localhost','root','','ejercicio 3');
                                $nombres=$_POST['txtnombre'];
                                $apellidos=$_POST['txtapellido'];
                                $username=$_POST['username'];
                                $password=$_POST['txtpassword'];
                                $email=$_POST['txtemail'];
                                $fechaNacimiento=$_POST['Nacimiento'];
                                $ciudadNacimiento=$_POST['ciudadNacimiento']; 
                                $genero=$_POST['rGenero'];
                                $interes1=$_POST['VInteres1'];
                                $interes2=$_POST['VInteres2'];
                                $interes3=$_POST['VInteres3'];
                                $interes4=$_POST['VInteres4'];
                                $interes5=$_POST['VInteres5'];
                                $interes6=$_POST['VInteres6'];
                                $interes7=$_POST['VInteres7'];
                                $interes8=$_POST['VInteres8'];
                                $biografia=$_POST['txtbiografia'];

                                $_SESSION['nombres']=$nombres;
                                $_SESSION['apellidos']=$apellidos;
                                $_SESSION['username']=$username;
                                $_SESSION['password']=$password;
                                $_SESSION['email']=$email;
                                $_SESSION['fechaNacimiento']=$fechaNacimiento;
                                $_SESSION['ciudadNacimiento']=$ciudadNacimiento;
                                $_SESSION['genero']=$genero;
                                $_SESSION['interes1']=$interes1;
                                $_SESSION['interes2']=$interes2;
                                $_SESSION['interes3']=$interes3;
                                $_SESSION['interes4']=$interes4;
                                $_SESSION['interes5']=$interes5;
                                $_SESSION['interes6']=$interes6;
                                $_SESSION['interes7']=$interes7;
                                $_SESSION['interes8']=$interes8;
                                $_SESSION['biografia']=$biografia;

    $sql_insert = "INSERT INTO datosusuarios (nombres, apellidos, username, password, email, fechaNacimiento, ciudadNacimiento, genero,intereses, biografia ) VALUES ('$nombres','$apellidos', '$username', MD5('$password'), '$email', '$fechaNacimiento', '$ciudadNacimiento', '$genero', '$interes1, $interes2, $interes3, $interes4, $interes5, $interes6, $interes7, $interes8', '$biografia')";
    $res=$conn->query($sql_insert);

    if($conn->error){
        echo $sql_insert;
        header('Location: registrarUsuarios.php?error_message2=Ocurrio un error: ' . $conn->error);
        exit;
    }else{
       header('Location: validacion.php');
    }
   }else{
   header('Location: registrarUsuarios.php?error_message2=Las contraseñas no coinciden por favor intentelo de nuevo');
   exit;
   }
}
?>