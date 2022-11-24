<?php
include 'bbdd.php';   
   $nombre = $_REQUEST["nombre"]; 
    $sql = "insert into trabajadores (nombre, foto, estado, ultimaActualizacion, fechaCreacicion) values ('$nombre', 'pro.png', '0', now(), now())";
    $conn->query($sql);
    $conn->close();
    Header("Location: admin.php");
    
    ?>