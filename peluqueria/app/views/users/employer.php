<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>App MVC</title>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <form method="POST" style="margin-left: 20px;" action="<?= PATH . "/consulta/guardarTrabajador" ?>">
    <label>Nombre: </label><input type="text" value="" name="nombre_trab"> <br>
    <label>Apellidos: </label><input type="text" value="" name="apellidos_trab"> <br>
    <label>DNI: </label><input type="text" value="" name="dni_trab"> <br>
    <label>Cuenta: </label><input type="text" value="" name="cuenta_trab"> <br> 
    <label>Correo: </label><input type="text" value="" name="correo_trab"> <br>
    <label>SS: </label><input type="text" value="" name="ss_trab"> <br>
    <label>Telefono: </label><input type="text" value="" name="telefono_trab"> <br>
    <label>Direccion: </label><input type="text" value="" name="direccion_trab"> <br> 
    <label>Salario: </label><input type="text" value="" name="salario_trab"> <br>
    <label>Fecha de nacimiento: </label><input type="text" value="" name="fecha_trab"> <br>
    <label>Categoria: </label><input type="text" value="" name="cat_trab"> <br>
    <input type="submit" value="Enviar">
  </form>

  <table style="margin-left: 40px; float:left">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Cuenta</th>
            <th>Correo</th>
            <th>SS</th>
            <th>Telefono</th>
            <th>Dirección</th>
            <th>Salario</th>
            <th>Fecha de nacimiento</th>
            <th>Categoría</th>
        </tr>
        <?php foreach ($pregs as $key => $preg) { ?>
            <tr>
                <td><?php echo $user->nombre ?></td>
                <td><?php echo $user->apellidos ?></td>
                <td><?php echo $user->correo ?></td>
                <td><?php echo $user->asunto?></td>
                <td><?php echo $user->mensaje?></td>
            </tr>
        <?php }?>
    </table>

</body>

</html>