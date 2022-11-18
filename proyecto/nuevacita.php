<?php
include 'bbdd.php';
session_start();

   
if (isset($error)){
    $_SESSION['hora'] = $_REQUEST['hora'];
    $_SESSION['error'] = $error;
    $_SESSION['id'] = $_REQUEST['id'];
    Header("Location: Usuario.php");
    echo $error;
}else{
$hora = $_REQUEST["hora"];
$idUsuario = $_SESSION['id'];
include 'bbdd.php';    
$sql = "insert into citas (idProfesional, idUsuario, fecha, Comentarios, fechaCreación) values ( 1, '$idUsuario', '$hora', now(), now())";
$conn->query($sql);
$conn->close();
Header("Location: Usuario.php");
}