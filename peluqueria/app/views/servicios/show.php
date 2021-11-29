<!doctype html>
<html lang="es">

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del servicio</h1>
        <ul>
            <li><strong>SERVICIO: </strong><?php echo $servicio->servicio ?></li>
            <li><strong>DESCRIPCION: </strong><?php echo $servicio->descripcion ?></li>
            <li><strong>TIEMPO: </strong><?php echo $servicio->tiempo ?></li>
            <li><strong>PRECIO: </strong><?php echo $servicio->precio ?></li>   
        </ul>
        <h2>Trabajadores que realizan este servicio</h2>
        <?php    
        foreach ($trabajador as $key => $trab) { ?>
          <?php echo $trab->nombre ?>
        <?php } ?>
    </div>

  </main>
</body>

</html>