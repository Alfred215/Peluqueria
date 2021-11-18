<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>App MVC</title>
</head>

<body>

    <?php require "app/views/parts/header.php" ?>

    <form method="POST" style="margin-left: 20px; float:left" action="<?= PATH . "/consulta/guardarPregunta" ?>">
        <label style="font-size: 20px;">Haznos una pregunta:</label><br><br>
        <label>Nombre: </label><input type="text" value="" name="nombre" required> <br>
        <label>Apellidos: </label><input type="text" value="" name="apellidos"> <br>
        <label>Correo: </label><input type="text" value="" name="correo" required> <br>
        <label>Asunto: </label><input type="text" value="" name="asunto" required> <br>
        <label>Mensaje: </label><input type="text" value="" name="mensaje" required> <br>
        <input type="submit" value="Enviar">
    </form>

    <table style="margin-left: 40px; float:left">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Asunto</th>
            <th>Mensaje</th>
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