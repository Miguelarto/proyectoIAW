<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="updatepass.php" method="get">
       
            <label for="pass">Contraseña: </label>
            <input type="pass" id="pass" name="pass"/>
        
        <input type="submit"/>
    </form>
    <?php
    $row['id'] = $_REQUEST["id"];
    $_SESSION['id'] = $row['id'];
    echo $row['id'];
    ?>

</body>
</html>