<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Edición de Servicios</h1>

    <form method="post" action="<?= PATH."/servicios/update"?>">
        <input type="hidden" name="id"
        value="<?php echo $servicios->id ?>">

    <div class="form-group">
        <label>ID</label>
        <input type="text" name="id" class="form-control"
        value="<?php echo $servicios->id ?>"
        >
    </div>
    <div class="form-group">
        <label>SERVICIO</label>
        <input type="text" name="servicio" class="form-control"
        value="<?php echo $servicios->servicio ?>"
        >
    </div>
    <div class="form-group">
        <label>DESCRIPCION</label>
        <input type="text" name="descripcion" class="form-control"
        value="<?php echo $servicios->descripcion ?>"
        >
    </div>
    <div class="form-group">
        <label>TIEMPO</label>
        <input type="text" name="tiempo" class="form-control"
        value="<?php echo $servicios->tiempo ?>"
        >
    </div>
    <div class="form-group">
        <label>PRECIO</label>
        <input type="text" name="precio" class="form-control"
        value="<?php echo $servicios->precio ?>"
        >
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>