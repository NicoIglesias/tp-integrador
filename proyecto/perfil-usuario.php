<?php


	include_once("soporte.php");

  $mailABuscar = $_GET["email"];

  $usuario = $db->traerPorMail($mailABuscar);

  if ($usuario == null) {
    header("Location:index.php");exit;
  }




?>

<div class="jumbotron">
	<h1>Perfil de usuario</h1>

</div>
<ul>
    <li>
      Username: <?=$usuario->getNombreDeUsuario()?>
    </li>
    <li>
      Email: <?=$usuario->getEmail()?>
    </li>

</ul>
