<?php
    include 'bbdd.php';
    session_start();
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
    
    $sql = "SELECT email, pass, id, nombre FROM usuarios WHERE pass LIKE '$pass' AND email LIKE '$email'";
    $result = $conn->query($sql);
    $nr = mysqli_num_rows($result);
    $row = $result -> fetch_assoc();
    $conn->close();

    if ($nr !== 1){
        $_SESSION['error'] = "Usuario y/o Contraseña incorrectas";
        header("location: login.php");
    }else{ 
    
    
    if ($row['email'] == 'admin@admin.com'){

        $_SESSION['logged'] = true;
        $_SESSION['email'] = $row['email'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['id'] = $row['id'];
       header("location: admin.php");

    }else {
        
        $_SESSION['logged'] = true;
        $_SESSION['email'] = $row['email'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['id'] = $row['id'];
       header("location: Usuario.php");
    }
}

   
?>