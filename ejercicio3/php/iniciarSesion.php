<?php
if(isset($_POST['username']) && isset($_POST['password'])){
     $username = $_POST['username'];
     $password = $_POST['password'];
     $conn = new mysqli('localhost','root','','ejercicio 3');

    $sql_insert = "SELECT * FROM datosusuarios WHERE username = '$username' AND password=MD5('$password')";
    $res=$conn->query($sql_insert);

    if($conn->error){
        echo $sql_insert;
        header('Location: ../index.php?error_message=Ocurrio un error: ' . $conn->error);
        exit;
    }
    
    if($res->num_rows > 0){
        while($row = $res-> fetch_assoc()){
            $_SESSION['user'] = ['username' =>$row['username'], 'id'=>$row['id']];
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            header('Location: registrarUsuarios.php');
            exit;
        }
        
    }else{
        header('Location: ../index.php?error_message=Usuario o contraseña incorrecta!');
        exit;
    }
 }else{
    echo 'No dispone de autorizacion';
    die();
 }
?>