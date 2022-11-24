<?php
  include 'bbdd.php';
  $id = $_REQUEST['id'];
  $sql = "delete from trabajadores where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: admin.php");
?>