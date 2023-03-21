<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Aula 01 de PHP ##</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h2>Envio via GET</h2>
    <hr>
    <form action="pag02.php" name="frmNome" id="frmNome" method="GET">
        <p>
            <label for="txtNome">Nome</label>
        </p>
        <p>
            <input type="text" name="txtNome" id="txtNome">
            <button>OK</button>
        </p>
    </form>
    <p>
        <?php 
            if($_GET)
            {
                echo $_GET['txtNome'];
            }
        ?>
    </p>
    <h2>Envio via POST</h2>
    <hr>
    <form action="pag02.php" name="frmNome" id="frmNome" method="POST">
        <p>
            <label for="txtNome">Nome</label>
        </p>
        <p>
            <input type="text" name="txtNome" id="txtNome">
            <button>OK</button>
        </p>
    </form>
    <p>
        <?php 
            if($_POST)
            {
                echo $_POST['txtNome'];
            }
        ?>
    </p>
</body>
</html>