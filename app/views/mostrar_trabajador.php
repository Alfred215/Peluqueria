<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Datos trabajador</h1>
        <ul>
            <li>Nombre: <?= $_SESSION['nombre_trab']?></li>
            <li>Apellidos: <?= $_SESSION['apellidos_trab']?></li> 
            <li>Fecha nacimiento: <?= $_SESSION['fecha_trab']?></li>
            <li>Dirección: <?= $_SESSION['direccion_trab']?></li>
            <li>Teléfono: <?= $_SESSION['telefono_trab']?></li>
            <li>Correo: <?= $_SESSION['correo_trab']?></li>
            <li>Dni: <?= $_SESSION['dni_trab']?></li>
            <li>Cuenta: <?= $_SESSION['cuenta_trab']?></li>
            <li>SS: <?= $_SESSION['ss_trab']?></li>
            <li>Salario: <?= $_SESSION['salario_trab']?></li>
            <li>Categoría: <?= $_SESSION['cat_trab']?></li>  
        </ul>
    </body>
</html>