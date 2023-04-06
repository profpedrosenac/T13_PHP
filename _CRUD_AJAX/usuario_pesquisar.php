<?php

// print_r($_POST);
// return;

include_once('conexao.php');

$id_usuario='';
$nome_usuario='';
$login_usuario='';
$senha_usuario='';
$cadastro_usuario='';
$status_usuario='';
$obs_usuario='';

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
                $id_usuario=$linha[0];
                $nome_usuario=$linha[1];
                $login_usuario=$linha[2];
                $senha_usuario=$linha[3];
                $cadastro_usuario=$linha[4];
                $status_usuario=$linha[5];
                $obs_usuario=$linha[6];

                echo "
                    <p>id_usuario: <span id='idGerado'>$id_usuario</span></p>
                    <p>nome_usuario: <span id='nomeUsuario'>$nome_usuario</span></p>
                    <p>login_usuario: <span id='loginUsuario'>$login_usuario</span></p>
                    <p>senha_usuario: <span id='senhaUsuario'>$senha_usuario</span></p>
                    <p>cadastro_usuario: <span id='cadastroUsuario'>$cadastro_usuario</span></p>
                    <p>status_usuario: <span id='statusUsuario'>$status_usuario</span></p>
                    <p>obs_usuario: <span id='obsUsuario'>$obs_usuario</span></p>
                ";
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