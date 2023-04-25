<?php 

include_once("conexao.php");

try{
	
	$id = $_POST["txtID"];
	
	$sql = "select * from usuario where id_usuario = ".$id;
	
	$data = $conn->query($sql);
	
	foreach($data as $linha){
		echo 'ID: <span id="idGerado">'.$linha[0].'</span><br>';
		echo 'Nome: <span id="nomePesquisa">'.$linha[1].'</span><br>';
		echo 'Usuario: <span id="usuarioPesquisa">'.$linha[2].'</span><br>';
		echo 'Senha: <span id="senhaPesquisa">'.$linha[3].'</span><br>';
		echo 'Img: <span id="imgPesquisa">'.$linha[4].'</span><br>';
		echo 'Status: <span id="statusPesquisa">'.$linha[5].'</span><br>';
		echo 'Obs: <span id="obsPesquisa">'.$linha[6].'</span><br>';
	}
	
	if($data->rowCount() == 0){
		echo "Usuário não existe<br>";
	}
	
}catch(PDOException $erro){
	echo $erro->getMessage();
}
?>
