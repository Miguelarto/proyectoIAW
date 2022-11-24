<?php

  include 'bbdd.php';
  $id = $row['id'];
  $pass = $_REQUEST["pass"];
  
  $sql = "update usuarios set pass='$pass' where id='$id'";
  $conn->query($sql);
  $conn->close();
  //header("location: admin.php");
  echo $sql;
?>