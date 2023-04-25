<?php 

$dbn = "ajax_teste_img";
$host = "localhost";
$user = "root";
$pass = "";

try {
	//Conectar
	$conn = new PDO( "mysql:dbname=$dbn; host=$host", $user, $pass );

	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$conn->exec( "set names utf8" );

} catch ( PDOException $erro ) {
	echo $erro->getMessage();
}



?>