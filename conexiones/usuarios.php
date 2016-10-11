<?php 

	include('database.php');
	// echo "soy la pagina usuarios.php";

	$connect = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

	if(!$connect){
		echo "error en la conexion";
	}


	print_r($_POST);
	// $_POST;
	// $_REQUEST;


	//$conexion
	// parametros
		// correo
		// pass
		//nombre
		//direccion
		//telefono

	$email = $_POST['correo'];
	$pass = $_POST['password'];
	$nombre = $_POST['user'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];

	// $query = 'INSERT INTO usuarios(nombre, password, correo, direccion, telefono) VALUES( ' . $nombre . ', ' . $pass . ', ' . $email . ', ' . $direccion . ', ' . $telefono . ')';

	$query = 'INSERT INTO usuarios(nombre, password, correo, direccion, telefono) VALUES( "' . $nombre . '", "' . $pass . '", "' . $email . '", "' . $direccion . '", "' . $telefono . '")';

	echo $query;

	$result = mysqli_query($connect, $query);

	if($result){
		echo "todo bien";
	}else{
		echo "query error";
	}

	

	






?>