<?php
  include 'bbdd.php';
  $id = $_REQUEST['id'];
  $hora = $_REQUEST['hora'];
  $sql = "update citas set fecha='$hora' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: Usuario.php");
?>