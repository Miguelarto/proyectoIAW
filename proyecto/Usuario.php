<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Mis citas</h1>
    <?php
        session_start();
        
        if(isset($_SESSION['logged'])){
            
            echo "<p>Bienvenido a tu area personal ".$_SESSION['nombre']."</p>";
           
            
        }else{
            // Muestro el acceso a la sección de usuario
            header("location: index.html");
        }
     
    ?>
     <table class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
    </table>
     <h1>Reserva tu cita</h1>

<form action="nuevacita.php" method="get">
  <label ford="">Fecha: </label>
  <input type="datetime-local" name="hora">
  <label ford="">Profesional: </label>
  <select name="idpro">
        <option value="0">Seleccione:</option>
        <?php
        include 'bbdd.php';  
          $sql ="SELECT id,nombre FROM trabajadores";
          $result = $conn->query($sql);
          
          while ($row = $result -> fetch_assoc()) {
            echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
          }
        ?>
      </select>
  
  <input type="submit"/>
</form>
<br>
<br>
<a href="cerrarSesion.php">Cerrar Sesión</a>

</body>
</html>