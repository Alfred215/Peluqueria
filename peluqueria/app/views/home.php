<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>App MVC</title>
</head>

<body>

  <?php require "app/views/header.php" ?>

  <form method="POST" action="<?= PATH . "/consulta/pregunta" ?>">
    <label>Nombre: </label><input type="text" value="" name="nombre"> <br>
    <label>Apellidos: </label><input type="text" value="" name="apellidos"> <br>
    <label>Correo: </label><input type="text" value="" name="correo"> <br>
    <label>Asunto: </label><input type="text" value="" name="asunto"> <br>
    <label>Mensaje: </label><input type="text" value="" name="mensaje"> <br>
    <input type="submit" value="Enviar">
  </form>

  <form method="POST" action="<?= PATH . "/consulta/trabajador" ?>">
    <label>Nombre: </label><input type="text" value="" name="nombre_trab"> <br>
    <label>Apellidos: </label><input type="text" value="" name="apellidos_trab"> <br>
    <label>Fecha de nacimiento: </label><input type="text" value="" name="fecha_trab"> <br>
    <label>Direccion: </label><input type="text" value="" name="direccion_trab"> <br>
    <label>Telefono: </label><input type="text" value="" name="telefono_trab"> <br>
    <label>Correo: </label><input type="text" value="" name="correo_trab"> <br>
    <label>DNI: </label><input type="text" value="" name="dni_trab"> <br>
    <label>Cuenta: </label><input type="text" value="" name="cuenta_trab"> <br>
    <label>SS: </label><input type="text" value="" name="ss_trab"> <br>
    <label>Salario: </label><input type="text" value="" name="salario_trab"> <br>
    <label>Categoria: </label><input type="text" value="" name="cat_trab"> <br>
    <input type="submit" value="Enviar">
  </form>

</body>

</html>