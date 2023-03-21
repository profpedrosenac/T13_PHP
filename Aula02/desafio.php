<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    <style>
        .tamanho{
            width:50px;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container mt-4">
        <form action="" class="form-control" method="POST">
            <div class="row">
                <div class="col-sm-12 p-3">
                    <h1>Desafio Calculadora</h1>
                </div>
                <div class="col-sm-3 p-3">
                    <input type="number" step="0.1" class="form-control" placeholder="Informe N1" name="txtN1" required>
                </div>
                <div class="col-sm-3 p-3">
                <input type="number" step="0.1" class="form-control" placeholder="Informe N2" name="txtN2" required>
                </div>
                <div class="col-sm-6 p-3">
                    <button class="btn btn-primary tamanho" formaction="desafio.php?tipo=soma">+</button>
                    <button class="btn btn-primary tamanho" formaction="desafio.php?tipo=sub">-</button>
                    <button class="btn btn-primary tamanho" formaction="desafio.php?tipo=mult">X</button>
                    <button class="btn btn-primary tamanho" formaction="desafio.php?tipo=div">:</button>
                    <a class="btn btn-danger" href="desafio.php">Limpar</a>
                </div>
            </div>
        </form>
        <hr>
        <div class="card p-3">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php
                    if($_POST)
                    {
                        if($_GET && isset($_GET['tipo']))
                        {
                            $n1 = $_POST['txtN1'];
                            $n2 = $_POST['txtN2'];
                            $op = $_GET['tipo'];
                            $total = 0;

                            if($op == 'soma')
                            {
                                $total = $n1 + $n2;
                            }
                            else if($op == 'sub')
                            {
                                $total = $n1 - $n2;
                            }
                            else if($op == 'mult')
                            {
                                $total = $n1 * $n2;
                            }
                            else if($op == 'div')
                            {
                                $total = $n1 / $n2;
                            }
                            echo "<h2>Resultado final da conta: $total</h2>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>