<?php
  include 'bbdd.php';  
  $idusuario = $_SESSION['id'];
  $sql = "select * from usuarios ";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    if (isset($_GET['id']) && ($row['id'] == $_GET['id'])) {
      echo '<form class="form-inline m-2" action="update.php" method="POST">';
      echo '<td><input type="text" class="form-control" name="name" value="'.$row['nombre'].'"></td>';
      echo '<td><input type="number" class="form-control" name="score" value="'.$row['id'].'"></td>';
      echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo '</form>';
    } else {
      echo "<td>" . $row['nombre'] . "</td>";
      echo "<td>" . $row['id'] . "</td>";
     
    }
    echo '<td><a class="btn btn-danger" href="deleteuser.php?id=' . $row['id'] . '" role="button">Eliminar usuario</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>