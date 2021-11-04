<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Envíanos tus preguntas</h1>
        <form action="?method=guardar" method="POST"> 
            <label>Nombre* </label><input type="text" value="" name="nombre" required><br>
            <label>Apellidos </label><input type="text" value="" name="apellidos"><br>
            <label>Correo Electronico* </label><input type="text" value="" name="correo" required><br>
            <label>Asunto* </label><input type="text" value="" name="asunto" required><br>
            <label>Mensaje* </label><input type="text" value="" name="mensaje" required><br>
            <input value="Enviar" type="submit">
        </form> 
    </body>
</html>