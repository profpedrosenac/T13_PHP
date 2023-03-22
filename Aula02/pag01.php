<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container mt-4">
        <form action="" class="form-control" method="POST">
            <div class="row">
                <div class="col-sm-3 p-3">
                    <input type="text" class="form-control" placeholder="NOME" name="txtNome" id="txtNome">
                </div>
                <div class="col-sm-3 p-3">
                    <input type="text" class="form-control" placeholder="SOBRENOME" name="txtSobrenome" id="txtSobrenome">
                </div>
                <div class="col-sm-3 p-3">
                    <input type="text" class="form-control" placeholder="INICIAIS DO NOME" name="txtIniciais" id="txtIniciais">
                </div>
                <div class="col-sm-3 p-3">
                    <button class="btn btn-primary" formaction="pag01.php">OK</button>
                    <a class="btn btn-danger" href="pag01.php">Limpar</a>
                </div>
            </div>
        </form>
        
        <?php
        if($_POST)
        {
            echo '
            <hr>
            <div class="card p-3">
                <div class="row">
                    <div class="col-sm-12 text-center">
            ';

            $nome = $_POST['txtNome'];
            $sobrenome = $_POST['txtSobrenome'];
            $iniciais = $_POST['txtIniciais'];

            echo '<b>Nome completo: </b>'. $nome ." ". $sobrenome ." - ". $iniciais;
            echo '
                    </div>
                </div>
            </div>
            ';
        }
        ?>
                
    </div>
    
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('form').submit(function(e) {
                if($('#txtNome').val()=="")
                {
                    e.preventDefault();
                    alert("erro, o nome devem ser preenchidos");
                    // ou return falso;
                }
                if($('#txtSobrenome').val()=="")
                {
                    e.preventDefault();
                    alert("erro, o sobrenome devem ser preenchidos");
                    // ou return falso;
                }
                if($('#txtIniciais').val()=="")
                {
                    e.preventDefault();
                    alert("erro, as iniciais devem ser preenchidos");
                    // ou return falso;
                }
            });
        });
    </script>
</body>
</html>