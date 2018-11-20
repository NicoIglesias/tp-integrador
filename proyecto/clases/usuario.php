<?php


class Usuario{

   protected $id;
   protected $nombreCompleto;
   protected $nombreDeUsuario;
	 protected $email;
	 protected $contraseña;


   public function __construct($email, $nombreDeUsuario, $nombreCompleto, $contraseña, $id = null) {
		 if ($id == null) {
			 $this->contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
	  	}
		 else {
			 $this->contraseña = $contraseña;
		 }

		 $this->id = $id;
		 $this->email = $email;
		 $this->nombreCompleto = $nombreCompleto;
		 $this->nombreDeUsuario = $nombreDeUsuario;
	  }

    public function getId() {
		 return $this->id;
	  }

	  public function setId($id) {
		  $this->id = $id;
	  }

	  public function getEmail() {
		  return $this->email;
	  }

	  public function setEmail($email) {
		 $this->email = $email;
	  }

	  public function getContrase() {
		 return $this->contraseña;
	  }

	  public function setContrase($contraseña) {
		 $this->contraseña = $contraseña;
	  }

	  public function getNombreDeUsuario() {
		 return $this->nombreDeUsuario;
	  }

	  public function setUsername($nombreDeUsuario) {
		 $this->nombreDeUsuario = $nombreDeUsuario;
	  }

	  public function getNombreCompleto() {
		 return $this->nombreCompleto;
	  }

	  public function setNombreCompleto($nombreCompleto) {
		 $this->nombreCompleto = $nombreCompleto;
	  }


}
?>
