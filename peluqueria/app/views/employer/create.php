<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>App MVC</title>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <form method="POST" style="margin-left: 20px; float:left;" action="<?= PATH . "/employer/guardarTrabajador" ?>">
    <label>Nombre: </label><input type="text" value="" name="nombre_trab"> <br>
    <label>Apellidos: </label><input type="text" value="" name="apellidos_trab"> <br>
    <label>DNI: </label><input type="text" value="" name="dni_trab"> <br>
    <label>Correo: </label><input type="text" value="" name="correo_trab"> <br>
    <label>Telefono: </label><input type="text" value="" name="telefono_trab"> <br>
    <label>Categoria: </label><input type="text" value="" name="cat_trab"> <br>
    <input type="submit" value="Enviar">
  </form>

</body>

</html>