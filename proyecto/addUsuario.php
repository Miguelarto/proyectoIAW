<?php
 session_start();

 if (!isset($_REQUEST['nombre']) or $_REQUEST['nombre']==''){
        $error = 'Nombre incompleto';
    }else if (!isset($_REQUEST['pass']) or $_REQUEST['pass']==''){
        $error = 'Contraseña incompleta';
    }else if(!filter_var( $_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
        $error = 'No has introducido un email valido.';
    }
    
    if (isset($error)){
        $_SESSION['nombre'] = $_REQUEST['pass'];
        $_SESSION['pass'] = $_REQUEST['pass'];
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['error'] = $error;
        Header("Location: nuevousuario.php");
        echo $error;
    }else{
    $nombre = $_REQUEST["nombre"];
    $pass = $_REQUEST["pass"];
    $email = $_REQUEST["email"];
    $foto = "user.png";
    //$foto = $_REQUEST["foto"];
    include 'bbdd.php';    
    $sql = "insert into usuarios (nombre, pass, email, foto, administrador, ultimaModificacion, fechaCreacion) values ('$nombre', '$pass', '$email', '$foto', 1, now(), now())";
    $conn->query($sql);
    $conn->close();
    Header("Location: Usuario.php");
    }
?>