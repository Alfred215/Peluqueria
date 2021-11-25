<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>App MVC</title>
</head>

<body>

    <?php require "app/views/parts/header.php" ?>

    <form action="<?= PATH."/home/insertar"?>" style="margin-left:20px;">
        <label>Titulo: </label><input type="text" name="titulo" value=""><br>
        <label>Descripción: </label> <input type="text" name="descripcion" value="" style="width:500px; height:300px;"><br>
    </form>

</body>

</html>