<?php
  include 'bbdd.php';
  $id = $_REQUEST['id'];
  $sql = "delete from usuarios where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: admin.php");
?>