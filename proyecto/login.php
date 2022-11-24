<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Inicia sesion</h1>
    <?php
        session_start();
        if (isset($_SESSION['error'])){
            echo "<p>".$_SESSION['error']."</p>";
        }
    ?>
    <form action="loginValidator.php" method="get">
        <div>
            <label for="email">Email de usuario: </label>
            <input type="text" id="email" name="email" />
        </div>
        <div>
            <label for="pass">Contraseña: </label>
            <input type="pass" id="pass" name="pass"/>
        </div>
        <input type="submit"/>
    </form>
</body>
</html>