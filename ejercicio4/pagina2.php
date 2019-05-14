<?php
if(isset($_POST['username']) && isset($_POST['txtqueja'])){
     $conn = new mysqli('localhost','root','','quejas');
                                $nombre=$_POST['username'];
                                $queja=$_POST['txtqueja'];
                                $fecha=date('Y-m-d');

    $sql_insert = "INSERT INTO quejas (nombre, queja, fechaQueja ) VALUES ('$nombre','$queja','$fecha')";
    $res=$conn->query($sql_insert);

    if($conn->error){
        echo $sql_insert;
        header('Location: pagina1.php?error_message=Ocurrio un error: ' . $conn->error);
        exit;
    }else{
       header('Location: pagina1.php');
    }
   }else{
   header('Location: pagina1.php?error_message=Acceso denegado!');
   exit;
}
?>