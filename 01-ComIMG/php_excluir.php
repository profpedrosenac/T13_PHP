<?php 

include_once("conexao.php");

try{
	
	$id_usuario=$_POST["txtID"];
	$data = $conn->prepare("delete from usuario where id_usuario=:id_usuario");
	
	$data->execute(array(
		':id_usuario'=>$id_usuario
	));
	
	echo "Linhas afetadas: ".$data->rowCount();
	echo "<br>";
	
	if ($data->rowCount() != 0)
		{echo "Dados Excluidos com sucesso!";}
	else
		{echo "Erro ao excluir os dados";}
	
}catch(PDOException $erro){
	echo $erro->getMessage();
}
?>