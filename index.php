<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="css/master.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/demoalert.js"></script>
  </head>
  <body>

    <div class="login-box">
      <img src="img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Iniciar Sección</h1>
      <form class="formulario" method="post" action="">
        <?php
            include ("controlador/conexion.php");
            include ("controlador/controlador.php");
        ?>
        <!-- Nombre INPUT -->
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Nombre del Usuario" name="nombre">
        <!-- Apellido INPUT -->
        <label for="apellido">Apellido</label>
        <input type="text" placeholder="Apellido del usuario" name="apellido">
        <!-- Contraseña INPUT -->
        <label for="Password">Contraseña</label>
        <input type="password" placeholder="Contraseña del usuario" name="password">
        <!-- button submit -->
        <input type="submit" value="Iniciar Sesion" name="btningresar">
        <input type="submit" value="Registrarse" name="btnregistrar">
      </form>
    </div>
  </body>
</html>

