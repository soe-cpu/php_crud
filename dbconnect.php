<?php 
	$server = 'localhost';
	$name = 'root';
	$pass = '';
	$dbname = 'php_crud';
	$db = mysqli_connect($server,$name,$pass,$dbname);
	if($db == true){
		echo "Database connect success";

	}else{
		die('Error'.mysqli_connect_error($db));
	}

 ?>