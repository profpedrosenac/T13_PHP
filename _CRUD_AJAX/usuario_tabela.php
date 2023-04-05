<form action="" class="form-control mb-2">

<table id="tabelaDados" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Data</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>

    <?php
    include_once ('conexao.php');
    try
    {
        $sql = $conn->query('select * from usuario');
        foreach($sql as $row)
        {
            echo "
                <tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[4]</td>
                    <td>$row[5]</td>
                </tr>
            ";
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
    ?>
    </tbody>
</table>

</form>

<script>
    $(document).ready(function () {
        $('#tabelaDados').DataTable();
    });
</script>