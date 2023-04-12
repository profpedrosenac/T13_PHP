<?php
include_once('conexao.php');

if($_POST)
{
    $id_usuario = $_POST['txtID'];
    try
    {
        $sql = $conn->query('select * from usuario where id_usuario='.$id_usuario);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $myObj = new stdClass();
                $myObj->id      =   $linha[0];
                $myObj->nome    =   $linha[1];
                $myObj->login   =   $linha[2];
                $myObj->senha   =   $linha[3];
                $myObj->data    =   $linha[4];
                $myObj->status  =   $linha[5];
                $myObj->obs     =   $linha[6];

                $myJSON = json_encode($myObj);

                echo $myJSON;
            }
        }
        else
        {
            echo "<p>Erro, dados não encontrado</p>";
            // echo '<a href="index.php">Voltar</a>';
        }

    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}

?>