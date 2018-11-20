<?php

require_once("clases/Mysqldb.php");
require_once("clases/auth.php");
require_once("clases/validador.php");
require_once('clases/usuario.php');

$dbType = "mysql";
$db = new Mysqldb();
$auth = new Auth();
$validador = new validador();
