<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Envíanos tus preguntas</h1>
        <h1>Trabajadores</h1>
        <p>Nombre, apellidos, dni, cuenta bancaria, numero de SS, telefono, correo, direccion, salario, fecha de nacimiento y categoria</p>
        <form action="?method=guardar_datos" method="POST"> 
            <label>Nombre </label><input type="text" value="" name="nombre" required><br>
            <label>Apellidos </label><input type="text" value="" name="apellidos"><br>
            <label>DNI </label><input type="text" value="" name="dni"><br>
            <label>Cuenta Bancaria </label><input type="text" value="" name="cuenta" required><br>
            <label>Correo Electronico </label><input type="text" value="" name="correo" required><br>
            <label>Número de SS </label><input type="text" value="" name="ss" required><br>
            <label>Telefono </label><input type="text" value="" name="telefono" required><br>
            <label>Dirección </label><input type="text" value="" name="direccion" required><br>
            <label>Salario </label><input type="text" value="" name="salario" required><br>
            <label>Fecha de nacimiento </label><input type="text" value="" name="fecha" required><br>
            <label>Categoría </label><input type="text" value="" name="cat" required><br>
            <input value="Enviar" type="submit">
        </form>
        <h1>Envíanos tus preguntas</h1>
        <form action="?method=guardar_consulta" method="POST"> 
            <label>Nombre* </label><input type="text" value="" name="nombre" required><br>
            <label>Apellidos </label><input type="text" value="" name="apellidos"><br>
            <label>Correo Electronico* </label><input type="text" value="" name="correo" required><br>
            <label>Asunto* </label><input type="text" value="" name="asunto" required><br>
            <label>Mensaje* </label><input type="text" value="" name="mensaje" required><br>
            <input value="Enviar" type="submit">
        </form> 
    </body>
</html>