<?php
include_once('conexao.php');
if($_POST)
{
    $id_usuario = $_POST['txtID'];
    $nome_usuario = $_POST['txtNome'];
    $login_usuario = $_POST['txtLogin'];
    $senha_usuario = $_POST['txtSenha'];
    $status_usuario = $_POST['txtStatus'];
    $obs_usuario = $_POST['txtObs'];
    
    try
    {
        $sql = $conn->prepare(
            'update usuario set
            nome_usuario=:nome_usuario,
            login_usuario=:login_usuario,
            senha_usuario=:senha_usuario,
            status_usuario=:status_usuario,
            obs_usuario=:obs_usuario 
            where id_usuario=:id_usuario'
        );

        $sql->execute(array(
            ':id_usuario'=>$id_usuario,
            ':nome_usuario'=>$nome_usuario,
            ':login_usuario'=>$login_usuario,
            ':senha_usuario'=>$senha_usuario,
            ':status_usuario'=>$status_usuario,
            ':obs_usuario'=>$obs_usuario
        ));

        if($sql->rowCount()==1)
        {
            echo "<p>Dados alterados com sucesso</p>";
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>