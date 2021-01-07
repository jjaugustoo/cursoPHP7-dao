<?php 

require_once("config.php");

	$sql = new Sql();

	$usuarios = $sql->select("Select * from tbl_usuario");

	echo json_encode($usuarios);
 ?>