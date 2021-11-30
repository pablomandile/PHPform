<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario_envio</title>
</head>
<body>
<h2>Datos personales</h2>
<form action="recibir.php" method="GET">
    <label for="nombre">Nombre </label><input id="nombre" type="text" name="nombre"><br>
    <label for="nombre">Apellido </label><input type="text"  name="apellido"><br>
    <label for="">Edad </label><input type="number" name="edad"><br>
    <label for="hobbies">Hobbies </label><input type="text"  name="hobbies"><br>
    <label for="editor">Editor de código que utiliza </label><input type="text"  name="editor"><br>
    <label for="OS">Sistema Operativo </label>
    <select name="OS" id="">
        <option value="Windows">Windows</option>
        <option value="MacOS">MacOS</option>
        <option value="Linux">Linux</option>
    </select><br>
    <input type="submit">
</form>    
</body>
</html>