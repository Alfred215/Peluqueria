<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>App MVC</title>
</head>

<body>

  <?php require "app/views/header.php" ?>

  <h1>Datos</h1>
  <ul>
    <li>Nombre: <?= $_SESSION['nombre'] ?></li>
    <li>Apellidos: <?= $_SESSION['apellidos'] ?></li>
    <li>Correo: <?= $_SESSION['correo'] ?></li>
    <li>Asunto: <?= $_SESSION['asunto'] ?></li>
    <li>Mensaje: <?= $_SESSION['mensaje'] ?></li>
  </ul>

</body>

</html>