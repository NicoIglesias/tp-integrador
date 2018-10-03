<?php  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
  </head>
  <style>

    html,body {
      background: #F8EEBC;
      font-family: "Arial";
    }

    .container {
      max-width: 1250px;
      margin-top: 100px;
      padding: 0;
      width: 90%;
      background-color: #FCE9E9;
      box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
    }

    .h1{
      text-align: center;
      margin-top: 35px;
      font-size: 40px;
    }

    main {
      padding: 20px 20px 0px 20px;
    }

    .left {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .foto {
      width: 200px;
      height: 200px;
      margin-top: -12px;

    }

    .nombre {
      margin-top: 20px;
      font-family: "Open Sans";
      font-weight: 600;
      font-size: 18pt;
      color: #777;
    }

    .info {
      margin-top: -5px;
      margin-bottom: 5px;
      font-family: 'Montserrat', sans-serif;
      font-size: 11pt;
      color: #aaa;
    }

    .descripcion {
      text-align: center;
      margin-top: 25px;
      margin: 25px 40px;
      color: #999;
      font-size: 11pt;
      font-family: "Open Sans";
      padding-bottom: 25px;
      border-bottom: 1px solid #ededed;
    }

    .right {
      padding: 0 25px 0 25px;
    }
    .galeria {
      margin-top: 35px;
    }

    .galeria div {
      margin-bottom: 30px;
    }

    .galeria img {
      box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
      width: auto;
      height: auto;
      cursor: pointer;
      max-width: 100%;
    }

    .img{
      padding: 95px;
    }
  </style>
  <body>
    <div class="container">

  <main>
    <div class="row">
      <div class="left col-lg-4">
        <div class="foto-left">
          <img class="foto" src="images/149071.png"/>
        </div>
        <h4 class="nombre">Pancita Feliz</h4>
        <p class="descripcion">Hola! me llamo pancita feliz y me gustan los caramelos con los chocolates y las gomitas</p>

      </div>
      <div class="right col-lg-8">


        <div class="row galeria">
          <div class="col-md-4">
             <img src="images/kids-partydress.jpg"/>
          </div>
          <div class="col-md-4">
            <img src="images/party-dress.jpg"/>
          </div>
          <div class="col-md-4">
             <img src="images/party-dress2.jpg"/>
          </div>
          <div class="col-md-4">
             <img src="images/party-dress3.jpg"/>
          </div>
          <div class="col-md-4">
            <img src="images/wedding-dress1.jpg"/>
          </div>
          <div class="col-md-4">
            <img class="img" src="images/baseline-add-24px.svg">
          </div>
        </div>
      </div>
  </main>
</div>

  </body>
</html>
