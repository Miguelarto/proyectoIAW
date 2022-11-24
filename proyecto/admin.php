<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Esta es la vista de administrador</h1>
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
        <th>Citas</th>
        <th>idcita</th>
        <th>idProfesional</th>
        <th>idusuario</th>
       
    <tbody>
      <?php include 'readadmin.php'; ?>
    </tbody>
    </table>
    <table class="table">
        <th>Usuarios</th>
        <th>id</th>
    <tbody>
      <?php include 'readadminuser.php'; ?>
    </tbody>
    </table>

    
    <br><br>
    <a href="cerrarSesion.php">Cerrar Sesión</a>
    </body>
</html>