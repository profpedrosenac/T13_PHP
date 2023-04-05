<select>
<?php
include_once('conexao.php');

try
{
    $sql = $conn->query('select * from usuario');

    foreach($sql as $linha)
    {
        echo
        "
            <option value='$linha[0]'>$linha[1]</option>
        ";
    }
}
catch(PDOException $ex)
{
    echo $ex->getMessage();
}
?>
</select>