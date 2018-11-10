<?php

  $tituloRegistro = "Registrese";
  if ($_POST) {

    $_POST['nombre_usuario'] = trim($_POST['nombre_usuario']);
    $_POST['contraseña'] = trim($_POST['contraseña']);
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






  }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
      }

    .myButton {
	    -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	    -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	    box-shadow:inset 0px 1px 0px 0px #ffffff;
	    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
	    background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	    background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	    background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	    background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	    background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
	    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
	    background-color:#ededed;
	    -moz-border-radius:6px;
	    -webkit-border-radius:6px;
	    border-radius:6px;
	    border:1px solid #dcdcdc;
	    display:inline-block;
	    cursor:pointer;
	    color:#777777;
	    font-family:Arial;
	    font-size:15px;
	    font-weight:bold;
	    padding:6px 24px;
	    text-decoration:none;
	    text-shadow:0px 1px 0px #ffffff;
    }
    .myButton:hover {
	    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
	    background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	    background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	    background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	    background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	    background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
	    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
	    background-color:#dfdfdf;
    }
    .myButton:active {
	   position:relative;
	   top:1px;
    }
    .error{
      color: red;
      font-size: 10px;
    }
  </style>
  <body>

    <form class="form" action="registro.php" method="post">
      <img src="images/logo60s.png" style="width:180px">
      <h1><?php echo $tituloRegistro ?></h1> <br>
      Nombre completo: <br>
      <input type="text" name="nombre completo" placeholder="Ingrese nombre completo"> <br>
      Nombre de Usuario: <br>
      <span class="error"><?php echo $errores['nombre_usuario']??''; ?></span> <br>
      <input type="text" name="Username" placeholder="Ingrese nombre de usuario">
      Correo electronico: <br>
      <span class="error"><?php echo $errores['email']??''; ?></span> <br>
      <input type="email" name="email" placeholder="Ingrese email"><br>
      Contraseña: <br>
      <span class="error"><?php echo $errores['contraseña']??''; ?></span> <br>
      <input type="password" name="contraseña" placeholder="Contraseña"> <br>
      Repita contraseña: <br>
      <input type="password" name="contraseña" placeholder="Repita contraseña"> <br>
      Imagen de perfil: <br>
      <input type="file" name="" value=""> <br><br>
      <button type="submit">registrarse</button>
    </form>
  </body>
</html>
