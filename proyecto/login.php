<?php


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
  </head>
  <style>
    body{
      background-color: #FCE9E9;
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

  </style>
  <body>

    <form class="form">
      <h1>Bienvenido/a</h1> <br><br>
      Usuario <br> <input type="text" name="usuario" placeholder="Ingrese usuario"> <br>
      Contraseña  <br> <input type="password" name="" placeholder="Ingrese contraseña"> <br>
      <a href="perfil.php"><input class="myButton" type="button" name="" value="Login"> <br> <br></a>
      <a href="registro.php">¿No tienes cuenta? <br> <input class="myButton" type="button" name="" value="Crear"></a>
    </form>
  </body>
</html>
