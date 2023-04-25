<?php
//print_r($_POST);

include_once("conexao.php");

try{
	
	$nome_usuario=$_POST['txtNome'];
	$usuario_usuario=$_POST['txtUsuario'];
	$senha_usuario=$_POST['txtSenha'];
	$img_usuario=$_POST['txtImg'];
	$status_usuario=$_POST['txtStatus'];
	$obs_usuario=$_POST['txtObs'];
	
	$data = $conn->prepare("
			insert into usuario (
				nome_usuario, usuario_usuario, senha_usuario, img_usuario, status_usuario, obs_usuario
			)values(
				:nome_usuario, :usuario_usuario, :senha_usuario, :img_usuario, :status_usuario, :obs_usuario
			)"
		);
	
	$data->execute(array(
		':nome_usuario'=>$nome_usuario,
		':usuario_usuario'=>$usuario_usuario,
		':senha_usuario'=>$senha_usuario,
		':img_usuario'=>$img_usuario,
		':status_usuario'=>$status_usuario,
		':obs_usuario'=>$obs_usuario,
	));

	if($data->rowCount() > 0)	
	{
		echo "Linhas afetadas: ".$data->rowCount();
		echo "<br>";
		echo "Código Gerado: <span id='idGerado'>".$conn->lastInsertId()."</span>";
	}
	
}catch(PDOException $erro){
	echo $erro->getMessage();
}
?>
