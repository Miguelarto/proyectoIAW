<?php
    include 'bbdd.php';
    session_start();
    $nombre = $_REQUEST["nombre"];
    $pass = $_REQUEST["pass"];
    
    $sql = "SELECT nombre FROM usuarios WHERE nombre LIKE '$nombre'";
    $sql2 = "SELECT nombre, pass FROM usuarios WHERE pass LIKE '$pass' AND nombre LIKE '$nombre'";
    $result2 = $conn->query($sql2);
    $result = $conn->query($sql);
    $nr = mysqli_num_rows($result2);
    $sql1 = "SELECT id FROM usuarios WHERE nombre LIKE '$nombre'";
    $result1 = $conn->query($sql1);
    $conn->close;
    
    
    if ($nr == 1){
        $_SESSION['logged'] = true;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['id'] = $result1; 
       header("location: Usuario.php");

    }else {
        
        $_SESSION['error'] = "Usuario y/o Contraseña incorrectas";
        header("location: login.php");
    }
  

   
?>