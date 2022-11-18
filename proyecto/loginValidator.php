<?php
    include 'bbdd.php';
    session_start();
    $nombre = $_REQUEST["nombre"];
    $pass = $_REQUEST["pass"];
    
    $sql = "SELECT nombre FROM usuarios WHERE nombre = '$nombre'";
    $sql2 = "SELECT pass FROM usuarios WHERE pass = '$pass'";
    $result2 = $conn->query($sql2);
    $result = $conn->query($sql);
    $sql1 = "SELECT id FROM usuarios WHERE nombre = '$nombre'";
    $result1 = $conn->query($sql1);
    
    if ($nombre==$result AND $pass==$result2){
        $_SESSION['logged'] = true;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['id'] = $result1; 
       
        $conn->close();
          
          header("location: Usuario.php");
    } else {
        
        $_SESSION['error'] = "Usuario y/o Contraseña incorrectas";
        header("location: login.php");
    }
   
?>