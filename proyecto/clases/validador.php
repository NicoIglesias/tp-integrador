<?php
require_once("db.php");
class validador {

  public function validarRegistro($datos, DB $db){
    $errores = [];
    $nombreCompleto = $datos['nombre_completo'];
    $nombreDeUsuario = $datos['nombre_usuario'];
    $contraseña = $datos['contrasena'];
    $confirmContraseña = $datos['confirmarContra'];
    $email = $datos['email'];

    $nombreDeUsuario = trim($nombreDeUsuario);
    $contraseña = trim($contraseña);
    $confirmContraseña = trim($confirmContraseña);
    $email = trim($email);

    //validacion del nombre de usuario
    if ($nombreDeUsuario == "") {
      $errores['nombre_usuario'] = "Debe completar el nombre de usuario";
    }elseif (strlen($nombreDeUsuario) < 4){
      $errores['nombre_usuario'] = "El usuario debe tener al menos 4 caracteres";
    }

    //validacion de nombreCompleto
    if ($nombreCompleto == "") {
      $errores['nombre_completo'] = "Debe completar el nombre";
    }


    //validacion de email
    if ($email == "") {
      $errores['email'] = "Debe completar el email";
    }

    //validacion contraseña
    if ($contraseña == "") {
      $errores['contrasena'] = "Debe completar la contraseña";
    }elseif (strlen($contraseña) < 6){
      $errores['contrasena'] = "La contraseña debe tener al menos 6 caracteres";
    }

    // confirmacion de contraseña

    if ($confirmContraseña !== $datos['contrasena'] ) {
      $errores['confirmarContra'] = "Las contraseñas no coinciden";
    }
    return $errores;
  }

  function validarLogin($datosL, DB $db) {
		$errores = [];
    $contraseña = $datosL['contrasena'];
    $email = $datosL['email'];


    $contraseña = trim($contraseña);

    $email = trim($email);

    //validacion de email
    if ($email == "") {
      $errores['email'] = "Debe completar el email";
    }else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
			$errores["email"] = "El mail tiene que ser un mail";
		} else if ($db->traerPorMail($email) == NULL) {
			$errores["email"] = "El usuario no esta en nuestra base";
		}

    $usuario = $db->traerPorMail($email);

    //validacion contraseña
    if ($contraseña == "") {
			$errores["contrasena"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($contraseña, $usuario->getContrase()) == false) {
				$errores["contrasena"] = "La contraseña no verifica";
			}
		}



		return $errores;
  }
}
