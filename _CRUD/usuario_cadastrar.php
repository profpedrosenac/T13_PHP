<?php
include_once('conexao.php');

if($_POST)
{
    $nome_usuario = $_POST['txtNome'];
    $login_usuario = $_POST['txtLogin'];
    $senha_usuario = $_POST['txtSenha'];
    $status_usuario = $_POST['txtStatus'];
    $obs_usuario = $_POST['txtObs'];

    try {
        $sql = $conn->prepare(
            "insert into usuario
            (nome_usuario,login_usuario,senha_usuario,status_usuario,obs_usuario)
            values
            (:nome_usuario,:login_usuario,:senha_usuario,:status_usuario,:obs_usuario)"
        );

        $sql->execute(array(
            ':nome_usuario'=>$nome_usuario,
            ':login_usuario'=>$login_usuario,
            ':senha_usuario'=>$senha_usuario,
            ':status_usuario'=>$status_usuario,
            ':obs_usuario'=>$obs_usuario
        ));

        if($sql->rowCount() > 0)
        {
            echo "<p>Dados cadastrados com sucesso</p>";
            echo "<p>Id Gerado: ".$conn->lastInsertId()."</p>";
            echo '<a href="index.php">Voltar</a>';
        }
    
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:index.php');
}

?>