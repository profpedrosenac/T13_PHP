<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.4.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>
                    Trabalhando com JQuery - AJAX -
                    <?php 
                    date_default_timezone_set('America/Sao_Paulo');

                    $hoje = date('d/m/Y');
                    $hora = date('H:i:s');
                    
                    echo $hora;
                    ?>


                </h1>
                <hr>
                <button class="btn btn-success" id="btoOK" onclick="CarregarDados()">OK</button>
                <div id="resposta"></div>
            </div>
        </div>
    </div>

    <script>
        function CarregarDados(){
            $('#resposta').load('usuario_pesquisaTeste.php');
        }
    </script>
</body>
</html>