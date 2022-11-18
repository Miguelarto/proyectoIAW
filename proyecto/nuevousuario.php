<!DOCTYPE html>
<html lang="e">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dentista</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>


    <h1>Nuevo usuario</h1>

    <form action="addUsuario.php" method="get">
      <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
      </div>
      <div>
        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="pass">
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
      </div>
      <div>
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto">
      </div>

      <input type="submit"/>
    </form>
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>