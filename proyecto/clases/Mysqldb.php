<?php
require_once("db.php");
require_once("usuario.php");
class Mysqldb extends DB {
  protected $conn;

  function __construct(){
    $dsn =
    'mysql:host=127.0.0.1;
    dbname=usuario;
    charset=utf8mb4';
    $user = "root";
    $pass = '';
    $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];


    try {
      $this->conn = new PDO($dsn, $user, $pass, $opt);
    }
    catch (PDOException $exception) {
      echo "el error de conexion es: ".$exception->getMessage();
    }


  }

  function guardarUsuario(Usuario $usuario) {
 		$query = $this->conn->prepare("
      Insert into usuarios (nombre_completo, nombre_usuario, email, contrasena)
      values(:nombre_completo, :nombre_usuario, :email, :contrasena)
    ");


    $query->bindValue(":nombre_completo", $usuario->getNombreCompleto(), PDO::PARAM_STR);
    $query->bindValue(":nombre_usuario", $usuario->getNombreDeUsuario(), PDO::PARAM_STR);
 		$query->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
 		$query->bindValue(":contrasena", $usuario->getContrase(), PDO::PARAM_STR);

 		$query->execute();

 		$id = $this->conn->lastInsertId();
 		$usuario->setId($id);

 		return $usuario;
 	}

  function traerTodos() {
		$query = $this->conn->prepare("Select * from usuarios");
		$query->execute();

		$usuariosFormatoArray = $query->fetchAll();

		$usuariosFormatoClase = [];

		foreach ($usuariosFormatoArray as $usuario) {
			$usuariosFormatoClase[] = new Usuario($usuario["nombre_completo"], $usuario["nombre_usuario"], $usuario["email"], $usuario["contrasena"], $usuario["id"]);
		}

		return $usuariosFormatoClase;
	}

	function traerPorMail($email) {
		$query = $this->conn->prepare("Select * from usuarios where email = :email");
		$query->bindValue(":email", $email);

		$query->execute();

		$usuarioFormatoArray = $query->fetch();

		if ($usuarioFormatoArray) {
			$usuario = new Usuario($usuarioFormatoArray["nombre_completo"], $usuarioFormatoArray["nombre_usuario"], $usuarioFormatoArray["email"], $usuarioFormatoArray["contrasena"]);
			return $usuario;
		} else {
			return NULL;
		}
	  }
  }
?>
