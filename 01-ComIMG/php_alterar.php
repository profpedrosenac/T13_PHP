<?php 

include_once("conexao.php");

try{
	
	$id_usuario=$_POST['txtID'];
	$nome_usuario=$_POST['txtNome'];
	$usuario_usuario=$_POST['txtUsuario'];
	$senha_usuario=$_POST['txtSenha'];
	$img_usuario=$_POST['txtImg'];
	$status_usuario=$_POST['txtStatus'];
	$obs_usuario=$_POST['txtObs'];
	
	$data = $conn->prepare("update usuario set
		nome_usuario=:nome_usuario,
		usuario_usuario=:usuario_usuario,
		senha_usuario=:senha_usuario,
		img_usuario=:img_usuario,
		status_usuario=:status_usuario,
		obs_usuario=:obs_usuario
		where id_usuario=:id_usuario
	");
	
	$data->execute(array(
		':id_usuario'=>$id_usuario,
		':nome_usuario'=>$nome_usuario,
		':usuario_usuario'=>$usuario_usuario,
		':senha_usuario'=>$senha_usuario,
		':img_usuario'=>$img_usuario,
		':status_usuario'=>$status_usuario,
		':obs_usuario'=>$obs_usuario,
	));
	
	echo "Linhas afetadas: ".$data->rowCount();
	echo "<br>";
	if ($data->rowCount() != 0)
		{
			echo "Dados Alterados com sucesso!<br>";
			echo "Código Afetado: <span id='idGerado'>".$id_usuario."</span>";
		}
	else
		{echo "Erro ao alterar os dados";}
	
}catch(PDOException $erro){
	echo $erro->getMessage();
}
?>