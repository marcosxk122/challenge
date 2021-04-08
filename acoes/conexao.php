<?php
$host 	= "localhost";
$db 		= "bd_usuarios";
$user 	= "root";
$pass 	= "";
$conn 	= mysqli_connect($host,$user,$pass,$db);


if (mysqli_connect_errno()){
	echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
}


?>
