<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Envíanos tus preguntas</h1>
        <form action="?method=guardar" method="POST"> 
            <label>Nombre* </label><input type="text" value="" name="nombre"><br>
            <label>Apellidos </label><input type="text" value="" name="apellidos"><br>
            <label>Correo Electronico* </label><input type="text" value="" name="correo"><br>
            <label>Asunto* </label><input type="text" value="" name="asunto"><br>
            <label>Mensaje* </label><input type="text" value="" name="mensaje"><br>
            <input value="Enviar" type="submit">
        </form> 
    </body>
</html>