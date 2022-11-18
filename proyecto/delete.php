<?php
  include 'bbdd.php';
  $id = $_REQUEST['id'];
  $sql = "delete from citas where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: Usuario.php");
?>