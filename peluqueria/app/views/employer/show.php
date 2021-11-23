<!doctype html>
<html lang="es">

<body>

  <?php require "app/views/parts/header2.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del Trabajador </h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $trab->nombre ?></li>
            <li><strong>Apellidos: </strong><?php echo $trab->apellidos ?></li>
            <li><strong>Dni: </strong><?php echo $trab->dni ?></li>
            <li><strong>Correo: </strong><?php echo $trab->correo ?></li>
            <li><strong>Telefono: </strong><?php echo $trab->telefono ?></li>
            <li><strong>Categoría: </strong><?php echo $trab->categoria ?></li>
        </ul>
    </div>

  </main>
</body>

</html>