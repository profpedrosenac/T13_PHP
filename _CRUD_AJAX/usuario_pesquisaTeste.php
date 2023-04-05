<?php
include_once('conexao.php');

try
{
    $sql = $conn->query('select * from usuario');

    foreach($sql as $linha)
    {
        echo '<pre>';
        print_r($linha);
        echo '</pre>';
        echo 'Id do usuário:'.$linha['id_usuario'].'<br><hr>';
    }
}
catch(PDOException $ex)
{
    echo $ex->getMessage();
}
?>