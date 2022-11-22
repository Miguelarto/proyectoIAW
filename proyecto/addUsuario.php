<?php
 session_start();
 include 'bbdd.php';
 $nombre = $_REQUEST["nombre"];
 $pass = $_REQUEST["pass"];
 $email = $_REQUEST["email"];
 $sql = "SELECT email FROM usuarios WHERE email LIKE '$email'";
 $result = $conn->query($sql);
 $nr = mysqli_num_rows($result);
 
 
 if (!isset($_REQUEST['nombre']) or $_REQUEST['nombre']==''){
        $error = 'Nombre incompleto';
    }else if (!isset($_REQUEST['pass']) or $_REQUEST['pass']==''){
        $error = 'Contraseña incompleta';
    }else if(!filter_var( $_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
        $error = 'No has introducido un email valido.';
    }else if($nr == 1){ 
        $error = 'Ya existe un usuario con este email, introduzca uno diferente';
        
    }if (isset($error)){
        $_SESSION['nombre'] = $_REQUEST['nombre'];
        $_SESSION['pass'] = $_REQUEST['pass'];
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['error'] = $error;
        Header("Location: nuevousuario.php");
        echo $error;
    }else{
   
    $foto = "user.png";
    //$foto = $_REQUEST["foto"];
    include 'bbdd.php';   
    $_SESSION['nombre'] = $nombre; 
    $sql = "insert into usuarios (nombre, pass, email, foto, administrador, ultimaModificacion, fechaCreacion) values ('$nombre', '$pass', '$email', '$foto', 1, now(), now())";
    $conn->query($sql);
    $conn->close();
    Header("Location: Usuario.php");
    }
?>