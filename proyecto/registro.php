<?php

  $tituloRegistro = "Registrate Gratis";


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1><?php echo $tituloRegistro ?></h1>
    <form class="" action="index.html" method="post">
      Nombre completo: <br>
      <input type="text" name="nombre completo" value="Ingrese nombre completo"> <br>
      Nombre de Usuario: <br>
      <input type="text" name="Username" value="Nombre de Usuario"> <br>
      Pais de nacimiento: <br>
      <select>
        <option value="Argentina">Argentina</option>
        <option value="Uruguay">Uruguay</option>
      </select> <br>
      Correo electronico: <br>
      <input type="email" name="email" value="email"> <br>
      Contraseña: <br>
      <input type="password" name="contraseña" value="contraseña"> <br>
      Repita contraseña: <br>
      <input type="password" name="contraseña" value="repita contraseña"> <br>
      Imagen de perfil: <br>
      <input type="file" name="" value=""> <br>
      <input type="button" name="button" value="ENVIAR">
    </form>
  </body>
</html>
