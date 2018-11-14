<?php


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <title>Login</title>
  </head>
  <style>
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

    


  </style>
  <body>

    <form class="form">
      <a href="index.php"><img src="images/logo60s.png" style="width:180px"></a>
      <h1>Bienvenido/a</h1> <br><br>
      Usuario <br> <input type="text" name="usuario" placeholder="Ingrese usuario"> <br>
      Contraseña  <br> <input type="password" name="" placeholder="Ingrese contraseña"> <br>
      <a href="perfil.php"><input class=" btn btn-primary btn btn-outline-success" type="button" name="" value="Login"> <br> <br></a>
      <a href="registro.php">¿No tienes cuenta? <br> <input class="btn btn-primary btn btn-outline-success" type="button" name="" value="Crear"></a>
    </form>
  </body>
</html>
