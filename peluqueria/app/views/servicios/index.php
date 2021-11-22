<!doctype html>
<html lang="es">

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de servicios</h1>
      <p><a href="<?= PATH."/servicios/create/"?>" class="btn btn-primary">Nuevo</a></p>
      <table class="table table-striped table-hover">
        <tr>
          <th>ID</th>
          <th>SERVICIO</th>
          <th>DESCRIPCION</th>
          <th>TIEMPO</th>
          <th>PRECIO</th>
          <th></th>
        </tr>
       
        <?php 
        
        // var_dump ($servicios); exit();    
        
        foreach ($servicios as $key => $servicio) { ?>
          <tr>
          <td><?php echo $servicio->id ?></td>
          <td><?php echo $servicio->servicio ?></td>
          <td><?php echo $servicio->descripcion ?></td>
          <td><?php echo $servicio->tiempo ?></td>
          <td><?php echo $servicio->precio ?></td>
          <td>
            <a href="<?= PATH."/servicios/show/".$servicio->id ?>" class="btn btn-primary">Ver </a>
            <a href="<?= PATH."/servicios/edit/".$servicio->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?= PATH."/servicios/delete/".$servicio->id ?>" class="btn btn-primary">Borrar </a>
          </td>
          </tr>
        <?php } ?>
      </table>

    </div>

        </main>


</body>

</html>