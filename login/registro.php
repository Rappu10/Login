<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    <form action="registrar.php" method="post">
        <h1 class="animate__animated animate__backInRight">Formulario de Registro</h1>
        <p>Nombre <input type="text" placeholder="Ingrese su nombre completo" name="nombre" required></p>
        <p>Usuario <input type="text" placeholder="Crea tu usuario" name="usuario" required></p>
        <p>Contraseña <input type="password" placeholder="Crea tu contraseña" name="contraseña" required></p>
        <p>Cargo:
            <select name="id_cargo" required>
                <option value="2">Usuario Casual</option>
                <option value="3">Cliente</option>
            </select>
        </p>
        <input type="submit" value="Registrar">
        <p>¿Ya tienes cuenta? <a href="index.html">Inicia sesión</a></p>
    </form>
</body>
</html>
