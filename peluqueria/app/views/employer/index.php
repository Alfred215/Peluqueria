<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>App MVC</title>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>
  <table style="margin-left: 40px; float:left">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Categoría</th>
        </tr>
        <?php foreach ($trab as $key => $trabs) { ?>
            <tr>
                <td><?php echo $trabs->nombre ?></td>
                <td><?php echo $trabs->apellidos ?></td>
                <td><?php echo $trabs->dni ?></td>
                <td><?php echo $trabs->correo?></td>
                <td><?php echo $trabs->telefono ?></td>
                <td><?php echo $trabs->categoria ?></td>
                <td><a href="<?= PATH."/employer/show/".$trabs->id ?>">Ver </a></td>
            </tr>
        <?php }?>
    </table>
</body>

</html>