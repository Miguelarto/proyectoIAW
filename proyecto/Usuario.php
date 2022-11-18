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
  <input type="submit"/>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>