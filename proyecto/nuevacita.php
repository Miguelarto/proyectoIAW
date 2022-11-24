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

    $hoy = date("Y-m-d");
    $fechaFormulario = $_REQUEST["hora"];
    if ($hoy <= $fechaFormulario) {
        $hora = $_REQUEST["hora"];
        $nombre = $_SESSION['nombre'];
        $idusuario = $_SESSION['id'];
        $idpro = $_REQUEST['idpro'];
        include 'bbdd.php';
        $sql = "insert into citas (idProfesional, idUsuario, fecha, Comentarios, fechaCreación) values ( '$idpro', '$idusuario', '$hora', now(), now())";
        $conn->query($sql);
        $conn->close();
        Header("Location: Usuario.php");
    
          }
   

else {
    
    echo "Fecha no valida";
    Header("Location: Usuario.php");

}
}