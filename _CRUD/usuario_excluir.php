<?php
include_once('conexao.php');
if($_POST)
{
    $id_usuario = $_POST['txtID'];
    
    try
    {
        $sql = $conn->prepare(
            'delete from usuario where id_usuario=:id_usuario'
        );

        $sql->execute(array(
            ':id_usuario'=>$id_usuario
        ));

        if($sql->rowCount()==1)
        {
            echo "<p>Dados excluidos com sucesso</p>";
            echo '<a href="index.php">Voltar</a>';
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>