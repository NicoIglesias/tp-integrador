<?php

  $tituloRegistro = "Registrese";
  if ($_POST) {

    $_POST['nombre_usuario'] = trim($_POST['nombre_usuario']);
    $_POST['contraseña'] = trim($_POST['contraseña']);
    $_POST['confirmarContra'] = trim($_POST['confirmarContra']);
    $_POST['email'] = trim($_POST['email']);

    //validacion del nombre de usuario
    if ($_POST['nombre_usuario'] == "") {
       $errores['nombre_usuario'] = "Debe completar el nombre de usuario";
    }elseif (strlen($_POST['nombre_usuario']) < 4){
       $errores['nombre_usuario'] = "El usuario debe tener al menos 4 caracteres";
    }

    //validacion de email
    if ($_POST['email'] == "") {
      $errores['email'] = "Debe completar el email";
    }

    //validacion contraseña
    if ($_POST['contraseña'] == "") {
      $errores['contraseña'] = "Debe completar la contraseña";
    }elseif (strlen($_POST['contraseña']) < 6){
      $errores['contraseña'] = "La contraseña debe tener al menos 6 caracteres";
    }

    // confirmacion de contraseña

    if ($_POST['confirmarContra'] !== $_POST['contraseña'] ) {
      $errores['confirmarContra'] = "Las contraseñas no coinciden";
    }





  }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <title>Registro</title>
  </head>
  <style media="screen">
    body{
      background-color: #F8EEBC;
      text-align: center;
    }
    form {
      position: relative;
      z-index: 1;
      background: #FFFFFF;
      max-width: 360px;
      margin: 60px auto 100px;
      padding: 45px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
      font-family: 'Josefin Sans', sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
      }


    .error{
      color: red;
      font-size: 10px;
    }
  </style>
  <body>

    <form class="form" action="registro.php" method="post">
      <a href="index.php"><img src="images/logo60s.png" style="width:180px"></a>
      <h1><?php echo $tituloRegistro ?></h1> <br>
      Nombre completo: <br>
      <input type="text" name="nombre completo" placeholder="Ingrese nombre completo"> <br>
      Nombre de Usuario: <br>
      <span class="error"><?php echo $errores['nombre_usuario']??''; ?></span> <br>
      <input type="text" name="nombre_usuario" placeholder="Ingrese nombre de usuario">
      Correo electronico: <br>
      <span class="error"><?php echo $errores['email']??''; ?></span> <br>
      <input type="email" name="email" placeholder="Ingrese email"><br>
      Contraseña: <br>
      <span class="error"><?php echo $errores['contraseña']??''; ?></span> <br>
      <input type="password" name="contraseña" placeholder="Contraseña"> <br>
      Repita contraseña: <br>
      <span class="error"><?php echo $errores['confirmarContra']??''; ?></span> <br>
      <input type="password" name="confirmarContra" placeholder="Repita su contraseña"> <br>
      Imagen de perfil: <br><br>
      <input type="file" name="" value=""> <br><br>
      <input class="btn btn-primary btn btn-outline-success" type="submit" name="submit" value="Registrese">
      <a class="btn btn-primary btn btn-outline-danger" href ="index.php">Cancelar</a>
    </form>

  </body>
</html>
