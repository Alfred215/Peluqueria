<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Envíanos tus preguntas</h1>
        <h1>Trabajadores</h1>
        <p>Nombre, apellidos, dni, cuenta bancaria, numero de SS, telefono, correo, direccion, salario, fecha de nacimiento y categoria</p>
        <form action="?method=guardar" method="POST"> 
            <label>Nombre </label><input type="text" value="" name="nombre" required><br>
            <label>Apellidos </label><input type="text" value="" name="apellidos"><br>
            <label>DNI </label><input type="text" value="" name="apellidos"><br>
            <label>Cuenta Bancaria </label><input type="text" value="" name="asunto" required><br>
            <label>Correo Electronico </label><input type="text" value="" name="correo" required><br>
            <label>Número de SS </label><input type="text" value="" name="asunto" required><br>
            <label>Telefono </label><input type="text" value="" name="asunto" required><br>
            <label>Dirección </label><input type="text" value="" name="asunto" required><br>
            <label>Salario </label><input type="text" value="" name="mensaje" required><br>
            <label>Fecha de nacimiento </label><input type="text" value="" name="asunto" required><br>
            <label>Categoría </label><input type="text" value="" name="asunto" required><br>
            <input value="Enviar" type="submit">
        </form>
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